<?php
session_start(); 

$host = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "survey_data";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = rand();
$service = $_POST['service'] ?? 'Ghana Educational Services';
$branch = $_POST['branch'] ?? 'GES  Head quaters,Accra'; 
// Prepare to insert each question and response
$stmt = $conn->prepare("INSERT INTO response ( service,branch,question,user_id, response) VALUES (?,?, ?, ?, ?)");

for ($i = 1; $i <= 19; $i++) {
    $question = $_POST["question_text_$i"] ?? "Question $i text not set";
    $response = $_POST["response_$i"] ?? 'No response';

    $stmt->bind_param("sssis",  $service,$branch, $question,$user_id, $response);
    $stmt->execute();
}

if ($stmt->errno) {
    echo "Error: " . $stmt->error;
} else {
    echo "Thank you for your responses!";
}
header("Location: ThankYou.html");

$stmt->close();
$conn->close();
?>

