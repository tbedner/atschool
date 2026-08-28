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