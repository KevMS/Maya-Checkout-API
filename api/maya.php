<?php

require_once '../vendor/autoload.php';

use GuzzleHttp\Client;

// Retrieve total payment and payment ID from the form submission
$totalPayment = isset($_POST['total_payment']) ? $_POST['total_payment'] : null;
$payment_id = isset($_POST['payment_id']) ? $_POST['payment_id'] : null;

// Check if total payment is provided
if ($totalPayment !== null) {
    $client = new Client();

    // Generate a unique reference number for the transaction
    $requestReferenceNumber = uniqid('PAYMENT_');

    // Prepare request data
    $requestData = [
        'totalAmount' => [
            'value' => $totalPayment,
            'currency' => 'PHP', // Assuming Philippine Peso currency
        ],
        'redirectUrl' => [
            'success' => "http://localhost/phpprojects/MayaIntegration/payment_success.php?booking_id=$payment_id",
            'failure' => "http://localhost/phpprojects/MayaIntegration/payment_failed.php?id=$payment_id",
            'cancel' => "http://localhost/phpprojects/MayaIntegration/payment_cancelled.php?booking_id=$payment_id"
        ],
        'requestReferenceNumber' => $requestReferenceNumber, // Include the requestReferenceNumber
    ];

    try {
        $response = $client->request('POST', 'https://pg-sandbox.paymaya.com/checkout/v1/checkouts', [
            'body' => json_encode($requestData),
            'headers' => [
                'accept' => 'application/json',
                'authorization' => 'Basic cGstWjBPU3pMdkljT0kyVUl2RGhkVEdWVmZSU1NlaUdTdG5jZXF3VUU3bjBBaDpzay1YOHFvbFlqeTYya0l6RWJyMFFSSzFoNGI0S0RWSGFOY3dNWWszOWpJblNs', // Replace with your actual authorization header
                'content-type' => 'application/json',
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);

        if (isset($responseData['redirectUrl'])) {
            header('Location: ' . $responseData['redirectUrl']);
            exit;
        } else {
            echo 'Error: Unable to retrieve redirect URL';
        }
    } catch (\GuzzleHttp\Exception\RequestException $e) {
        echo 'Error: ' . $e->getMessage();
    }
} else {
    echo 'Error: Total payment amount is missing';
}
?>
