<?php

function get_account_database(): PDO {
    static $database;

    if ($database instanceof PDO) {
        return $database;
    }

    $env = parse_ini_file(__DIR__ . '/.env');
    $host = $env['DB_HOST'] ?? 'localhost';
    $port = $env['DB_PORT'] ?? '3306';
    $name = $env['DB_NAME'] ?? '';
    $user = $env['DB_USER'] ?? '';
    $password = $env['DB_PASSWORD'] ?? '';

    if ($name === '' || $user === '') {
        throw new RuntimeException('Database configuration is incomplete.');
    }

    $database = new PDO(
        'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $name . ';charset=utf8mb4',
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );

    return $database;
}

function get_moodle_database(): PDO {
    static $database;

    if ($database instanceof PDO) {
        return $database;
    }

    $env = parse_ini_file(__DIR__ . '/.env');
    $host = $env['MOODLE_DB_HOST'] ?? '';
    $port = $env['MOODLE_DB_PORT'] ?? '3306';
    $name = $env['MOODLE_DB_NAME'] ?? '';
    $user = $env['MOODLE_DB_USER'] ?? '';
    $password = $env['MOODLE_DB_PASSWORD'] ?? '';

    if ($name === '' || $user === '') {
        throw new RuntimeException('Moodle database configuration is incomplete.');
    }

    $database = new PDO(
        'mysql:host=' . ($host !== '' ? $host : 'localhost') . ';port=' . $port . ';dbname=' . $name . ';charset=utf8mb4',
        $user,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );

    return $database;
}

function seed_moodle_course_xp(int $courseId, int $userId, int $minimumXp, int $minimumLevel): void {
    if ($courseId <= 0 || $userId <= 0 || $minimumXp < 0 || $minimumLevel < 1) {
        return;
    }

    $env = parse_ini_file(__DIR__ . '/.env');
    $tablePrefix = $env['MOODLE_DB_PREFIX'] ?? 'mdlpj_';
    if (!preg_match('/^[A-Za-z0-9_]+$/', $tablePrefix)) {
        throw new RuntimeException('Invalid Moodle database table prefix.');
    }

    try {
        $database = get_moodle_database();
        $statement = $database->prepare(
            'INSERT INTO ' . $tablePrefix . 'block_xp (courseid, userid, xp, lvl)
             VALUES (:courseid, :userid, :xp, :lvl)
             ON DUPLICATE KEY UPDATE xp = GREATEST(xp, VALUES(xp)), lvl = GREATEST(lvl, VALUES(lvl))'
        );
        $statement->execute([
            'courseid' => $courseId,
            'userid' => $userId,
            'xp' => $minimumXp,
            'lvl' => $minimumLevel,
        ]);
    } catch (Throwable $exception) {
        error_log('Unable to seed Moodle XP course=' . $courseId . ' user=' . $userId . ': ' . $exception->getMessage());
    }
}

function transfer_moodle_course_xp(int $sourceCourseId, int $targetCourseId, int $userId, int $minimumXp): void {
    if ($sourceCourseId <= 0 || $targetCourseId <= 0 || $userId <= 0 || $minimumXp < 0) {
        return;
    }

    $env = parse_ini_file(__DIR__ . '/.env');
    $tablePrefix = $env['MOODLE_DB_PREFIX'] ?? 'mdlpj_';
    if (!preg_match('/^[A-Za-z0-9_]+$/', $tablePrefix)) {
        throw new RuntimeException('Invalid Moodle database table prefix.');
    }

    $levelThresholds = [0, 120, 276, 479, 742, 1085, 1531, 2110, 2863, 3842, 5114, 6768, 8918];

    try {
        $database = get_moodle_database();
        $sourceStatement = $database->prepare(
            'SELECT xp FROM ' . $tablePrefix . 'block_xp WHERE courseid = :courseid AND userid = :userid LIMIT 1'
        );
        $sourceStatement->execute(['courseid' => $sourceCourseId, 'userid' => $userId]);
        $sourceXp = (int) ($sourceStatement->fetchColumn() ?: 0);
        $xp = max($sourceXp, $minimumXp);
        $level = 1;
        foreach ($levelThresholds as $index => $threshold) {
            if ($xp >= $threshold) {
                $level = $index + 1;
            }
        }

        $statement = $database->prepare(
            'INSERT INTO ' . $tablePrefix . 'block_xp (courseid, userid, xp, lvl)
             VALUES (:courseid, :userid, :xp, :lvl)
             ON DUPLICATE KEY UPDATE xp = GREATEST(xp, VALUES(xp)), lvl = GREATEST(lvl, VALUES(lvl))'
        );
        $statement->execute([
            'courseid' => $targetCourseId,
            'userid' => $userId,
            'xp' => $xp,
            'lvl' => $level,
        ]);
    } catch (Throwable $exception) {
        error_log('Unable to transfer Moodle XP source_course=' . $sourceCourseId . ' target_course=' . $targetCourseId . ' user=' . $userId . ': ' . $exception->getMessage());
    }
}