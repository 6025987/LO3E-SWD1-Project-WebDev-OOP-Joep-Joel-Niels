<?php
static $db = null;

if ($db === null) {
    $host = "localhost";
    $databaseName = "test_mbo_cinemas";
    $username = "root";
    $password = "";
    $dsn = "mysql:host=$host;dbname=$databaseName";

    try {
        $db = new PDO($dsn, $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $error) {
        die("Connection failed: " . $error->getMessage());
    }
}
?>