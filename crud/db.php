<?php
$servername = "db";
$username = "rk_user";
$password = "Rochan@987";
$dbname = "crud_app";

// $servername = "localhost";
// $username = "rochan23000";
// $password = "omt1zrrS";
// $dbname = "wp_rochan23000";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>