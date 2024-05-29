<?php
// Database connection parameters
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "udemy_db2";

// Create connections
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data
    $fullname = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Check if fields are empty
    if (empty($fullname) || empty($email) || empty($password)) {
        echo "All fields are required.";
    } elseif (strlen($password) <= 8) {
        echo "Password must be greater than 8 characters.";
    } else {
        // Check if email already exists
        $email_check_stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $email_check_stmt->bind_param("s", $email);
        $email_check_stmt->execute();
        $email_check_stmt->store_result();

        if ($email_check_stmt->num_rows > 0) {
            echo "This email is already registered.";
        } else {
            // Hash the password before storing it
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare and bind for insert
            $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $fullname, $email, $hashed_password);

            // Execute the statement
            if ($stmt->execute()) {
                // Redirect to login page upon successful registration
                header("Location: ../FrontEnd/login.php");
                exit();
            } else {
                echo $stmt->error;
            }

            // Close the statement
            $stmt->close();
        }

        // Close the email check statement
        $email_check_stmt->close();
    }
}

// Close connection
$conn->close();
?>
