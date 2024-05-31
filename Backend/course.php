<?php
// Start the session
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "udemy_db2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_SERVER['REQUEST_METHOD']=="POST"){
// Function to validate input data
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Validate form data
$courseTitle = test_input($_POST['courseTitle']);
$courseDescription = test_input($_POST['courseDescription']);
$courseCategory = test_input($_POST['courseCategory']);
$courseLevel = test_input($_POST['courseLevel']);
$coursePriceCurrency = test_input($_POST['coursePriceCurrency']);
$coursePriceTier = test_input($_POST['coursePriceTier']);
$userId = $_SESSION['user_id'];

// Handle file uploads
$courseImage = $_FILES['courseImage'];
$courseVideo = $_FILES['courseVideo'];
$courseFile = $_FILES['courseFile'];

$imagePath = "../BackEnd/uploads/images/" . basename($courseImage["name"]);
$videoPath = "../BackEnd/uploads/videos/" . basename($courseVideo["name"]);
$filePath = isset($courseFile) ? "../BackEnd/uploads/files/" . basename($courseFile["name"]) : NULL;

// Move the uploaded files to the appropriate directories
move_uploaded_file($courseImage["tmp_name"], $imagePath);
move_uploaded_file($courseVideo["tmp_name"], $videoPath);
if ($filePath) {
    move_uploaded_file($courseFile["tmp_name"], $filePath);
}

// Determine the price based on the selected tier
$price = 0;
switch ($coursePriceTier) {
    case "basic":
        $price = 10;
        break;
    case "standard":
        $price = 20;
        break;
    case "premium":
        $price = 50;
        break;
}

// Insert data into the course table
$stmt = $conn->prepare("INSERT INTO course (user_id, title, descriptions, category, levels, currency, price) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssi", $userId, $courseTitle, $courseDescription, $courseCategory, $courseLevel, $coursePriceCurrency, $price);

if ($stmt->execute()) {
    $courseId = $stmt->insert_id;
    $rate=0.0;
    // Insert data into the course_resource table
    $stmt = $conn->prepare("INSERT INTO course_resource (course_id, images, video, files, rating) VALUES (?, ?, ?, ?,?)");
    $stmt->bind_param("isssd", $courseId, $imagePath, $videoPath, $filePath,$rate);

    if ($stmt->execute()) {
        echo "Course published successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
}
// Close the statement and connection

?>
