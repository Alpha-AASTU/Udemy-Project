<?php
session_start();
require '../vendor/autoload.php'; // Ensure Composer autoload is included if using Composer

use Chapa\Chapa;
use Chapa\Model\PostData;
use Chapa\Util;

$chapa = new Chapa('CHASECK_TEST-uSz4c6MDbfkDMC4KsaQ7uWKRypaRTYNB');

// Generate a unique transaction reference
$transactionRef = Util::generateToken();

// Assuming these values come from your application
$courseId = $_GET['course_id']; // Get course ID from the query parameters
$coursePrice = 49.99; // Replace with dynamic value or fetch from your database
$customerEmail = 'abebe@bikila.com'; // Replace with dynamic value
$userId = $_SESSION['user_id']; // Retrieve user ID from session

// Prepare post data
$postData = new PostData();
$postData->amount($coursePrice)
    ->currency('USD')
    ->email($customerEmail)
    ->firstname('Luhena')
    ->lastname('Abebe')
    ->transactionRef($transactionRef)
    ->callbackUrl('http://localhost/udemy2/backend/src/callback.php?course_id=' . $courseId) // Set the callback URL
    ->customizations(
        array(
            'customization[title]' => 'E-commerce',
            'customization[description]' => 'It is time to pay'
        )
    );

$response = $chapa->initialize($postData);

if ($response) {
    $responseData = $response->getData(); // Assuming getData() returns the stdClass object
    if (property_exists($responseData, 'checkout_url')) {
        $checkoutUrl = $responseData->checkout_url;
        header("Location: $checkoutUrl");
       // exit;
    } else {
        echo "Error: Checkout URL not found in response.";
    }
} else {
    echo "Initialization failed.";
}

/*$response1 = $chapa->verify($transactionRef);
if ($response1) {
    if ($response1->getStatusCode() == 200) {
        echo 'Payment not verified because ' . $response1->getMessage();
    } else {
        echo 'Payment verified successfully!';
    }
} else {
    echo "Verification failed.";
}

*/
