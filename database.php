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