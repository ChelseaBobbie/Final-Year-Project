<?php
$host = 'localhost';  // or your host
$dbname = 'survey_data';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to get data
    $stmt = $conn->prepare("SELECT question_text, response_text, COUNT(*) as count FROM responses GROUP BY question_text, response_text");
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Prepare data for demographics, service availability, and corruption
    $demographics = [];
    $serviceAvailability = [];
    $corruption = [];

    foreach ($results as $row) {
        // Assuming you have a way to differentiate types of questions
        if (strpos($row['question_text'], 'Demographic') !== false) {
            $demographics[$row['question_text']][$row['response_text']] = $row['count'];
        } elseif (strpos($row['question_text'], 'Service') !== false) {
            $serviceAvailability[$row['question_text']][$row['response_text']] = $row['count'];
        } elseif (strpos($row['question_text'], 'Corruption') !== false) {
            $corruption[$row['question_text']][$row['response_text']] = $row['count'];
        }
    }

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Encode data for JavaScript
echo "<script>
        var demographicsData = " . json_encode($demographics) . ";
        var serviceAvailabilityData = " . json_encode($serviceAvailability) . ";
        var corruptionData = " . json_encode($corruption) . ";
      </script>";
?>
