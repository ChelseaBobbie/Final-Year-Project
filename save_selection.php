<?php
  // include('db.php')
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "survey_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $service_text = $_POST['service'] ?? null;
    $branch_text = $_POST['branch'] ?? null;

    // Assume we fetch IDs based on text, you'll need actual queries here
    $service_id = fetch_service_id($service_text, $conn);
    $branch_id = fetch_branch_id($branch_text, $conn);

    // Store IDs in session variables
    $_SESSION['service_id'] = $service_id;
    $_SESSION['branch_id'] = $branch_id;
}

function fetch_service_id($service_text, $conn) {
    $stmt = $conn->prepare("SELECT service_id FROM services WHERE service_text = ?");
    $stmt->bind_param("s", $service_text);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        return $row['service_id'];
    }
    return null; // or handle error
}

function fetch_branch_id($branch_text, $conn) {
    $stmt = $conn->prepare("SELECT branch_id FROM branches WHERE branch_text = ?");
    $stmt->bind_param("s", $branch_text);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        return $row['branch_id'];
    }
    return null; // or handle error
}
?>
