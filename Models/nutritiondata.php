<?php
// Start a session
session_start();

require '../Core/databaseconnection.php'; // Include the database connection code

$query = $pdo->query("SELECT id, food_name FROM Food");
$food = $query->fetchAll(PDO::FETCH_ASSOC);