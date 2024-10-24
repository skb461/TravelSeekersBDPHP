<?php
$host = 'localhost';  // Database host (default is localhost)
$db = 'travel_seeker';  // Database name
$user = 'root';  // MySQL username (default for XAMPP/WAMP is 'root')
$pass = '';  // MySQL password (leave empty for default setup)

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit();
}
?>
