<?php
$type     = 'mysql';                 // Type of database
$server   = '127.0.0.1';             // Server the database is on
$db       = 'login';                 // Name of the database
$port     = '3306';                  // Port is 3306 in XAMPP
$charset  = 'utf8mb4';               // UTF-8 encoding using 4 bytes of data per character
$username = 'testuser';              // Enter YOUR username here
$password = 'Cnupavanphp1729@';      // Enter YOUR password here

$options  = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "An exception occurred: " . $e->getMessage();
}