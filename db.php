<?php
$host = 'localhost';
$dbname = 'edu_website';  // Make sure this matches your database name
$username = 'root';       // Default username for XAMPP/WAMP is 'root'
$password = '';           // Default password for XAMPP/WAMP is an empty string

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     'Database connection successful';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>