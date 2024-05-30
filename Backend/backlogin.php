<?php
session_start();
// Database connection parameters
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "udemy_db2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Check if fields are empty
    if (empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        // Check if email exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();
            // Verify password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, redirect to home page
                $_SESSION['user_id'] = $user_id;
                $_SESSION['email'] = $email;

                header("Location: ../FrontEnd/home.php");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this email.";
        }

        // Close the statement
        $stmt->close();
    }
}

// Close connection
$conn->close();
?>
