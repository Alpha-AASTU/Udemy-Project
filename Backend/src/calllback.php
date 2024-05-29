<?php
session_start();
require '../vendor/autoload.php'; // Ensure Composer autoload is included if using Composer

use Chapa\Chapa;

$secreteKey = 'CHASECK_TEST-jyQzgT5bDWrCtIRHXrkK5TI0tkprjb1c'; // Replace with your actual secret key

$chapa = new Chapa($secreteKey);

// Get the transaction reference from the callback URL parameters
//$transactionRef = $_GET['tx_ref'];
$courseId = $_GET['course_id'];
$userId = $_SESSION['user_id'];

try {
    $response = $chapa->verify($transactionRef);

    if ($response && $response->isSuccessful() && $response->getData()->status === 'success') {
        // Payment was successful, store the payment details in the database

        $amount = $response->getData()->amount;
        $customerEmail = $response->getData()->customer->email;
        $transactionId = $response->getData()->id;

        // Connect to the database
        $mysqli = new mysqli('localhost', 'root', '', 'udemy_db2');

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Prepare and bind
        $stmt = $mysqli->prepare("INSERT INTO payments (transaction_id, transaction_ref, amount, customer_email, course_id, user_id) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdsii", $transactionId, $transactionRef, $amount, $customerEmail, $courseId, $userId);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Payment recorded successfully.";
            // Redirect the user to a success page or perform other actions
        } else {
            echo "Error recording payment: " . $stmt->error;
        }

        $stmt->close();
        $mysqli->close();
    } else {
        echo "Payment verification failed: " . $response->getMessage();
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
