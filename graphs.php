<?php

header('Content-Type: application/json'); // Set header for outputting the JSON
session_start(); 
// Database connection setup
$host = "localhost"; // or your host
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "survey_data";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
header('Content-Type: application/json'); // Set header for outputting the JSON


// Query to fetch data from responses table
$query = "SELECT question, COUNT(*) as count, response FROM response GROUP BY question, response";
$result = $conn->query($query);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

$conn->close();

// Print the data in JSON format
echo json_encode($data);
?>
