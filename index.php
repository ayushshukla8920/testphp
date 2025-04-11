<?php
$host = 'mysql-97180f4-ayushshukla8920-232a.k.aivencloud.com'; // Replace with your Aiven host
$port = 19295; // Replace with your Aiven port
$dbname = 'test'; // Replace with your actual database name
$username = 'avnadmin'; // Or the exact username provided by Aiven
$password = 'AVNS_NkZmKUxjS0cAXzbrEyx'; // Your password

$conn = new mysqli($host, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";
$conn->close();
?>
