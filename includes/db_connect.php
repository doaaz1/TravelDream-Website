<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "travel_explorer_db";  // اسم قاعدة البيانات الجديدة

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>
