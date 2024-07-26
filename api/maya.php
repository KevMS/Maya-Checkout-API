<?php

// Load Composer's autoload file to include necessary dependencies
require_once '../vendor/autoload.php';

// Import the Guzzle HTTP client for making API requests
use GuzzleHttp\Client;

// Retrieve total payment and payment ID from the form submission
$totalPayment = isset($_POST['total_payment']) ? $_POST['total_payment'] : null;
$payment_id = isset($_POST['payment_id']) ? $_POST['payment_id'] : null;

// Check if total payment is provided
if ($totalPayment !== null) {
    // Instantiate a new Guzzle HTTP client
    $client = new Client();

    // Generate a unique reference number for the transaction
    $requestReferenceNumber = uniqid('PAYMENT_');

    // Prepare request data for Maya API
    $requestData = [
        'totalAmount' => [
            'value' => $totalPayment, // Set the total payment value
            'currency' => 'PHP', // Specify the currency as Philippine Peso
        ],
        'redirectUrl' => [
            // URLs to redirect the user after payment processing
            'success' => "http://localhost/phpprojects/MayaIntegration/payment_success.php?booking_id=$payment_id", // Redirect URL on successful payment
            'failure' => "http://localhost/phpprojects/MayaIntegration/payment_failed.php?id=$payment_id", // Redirect URL on failed payment
            'cancel' => "http://localhost/phpprojects/MayaIntegration/payment_cancelled.php?booking_id=$payment_id" // Redirect URL if payment is canceled
        ],
        'requestReferenceNumber' => $requestReferenceNumber, // Include the unique transaction reference number
    ];

    try {
        // Make a POST request to the Maya Checkout API
        $response = $client->request('POST', 'https://pg-sandbox.paymaya.com/checkout/v1/checkouts', [
            'body' => json_encode($requestData), // JSON-encode the request data
            'headers' => [
                'accept' => 'application/json', // Accept JSON response
                'authorization' => 'Basic cGstWjBPU3pMdkljT0kyVUl2RGhkVEdWVmZSU1NlaUdTdG5jZXF3VUU3bjBBaDpzay1YOHFvbFlqeTYya0l6RWJyMFFSSzFoNGI0S0RWSGFOY3dNWWszOWpJblNs', // Replace with your actual authorization header
                'content-type' => 'application/json', // Content type is JSON
            ],
        ]);

        // Decode the JSON response from the API
        $responseData = json_decode($response->getBody(), true);

        // Check if the response contains a redirect URL
        if (isset($responseData['redirectUrl'])) {
            // Redirect the user to the payment page
            header('Location: ' . $responseData['redirectUrl']);
            exit; // Terminate the script after redirection
        } else {
            // Display an error message if the redirect URL is missing
            echo 'Error: Unable to retrieve redirect URL';
        }
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        // Catch and display any exceptions thrown during the API request
        echo 'Error: ' . $e->getMessage();
    }
} else {
    // Display an error message if the total payment amount is missing
    echo 'Error: Total payment amount is missing';
}

?>
