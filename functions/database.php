<?php

function getPDO() {
    static $pdo = null;

    if ($pdo === null) {
        try {
            $pdo = new PDO(
                'mysql:host=127.0.0.1;dbname=teamup;charset=utf8mb4',
                'root',
                '',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $err) {
            throw $err;
        }
    }

    return $pdo;
}