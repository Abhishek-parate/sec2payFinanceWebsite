<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form Validation
    if (empty($_POST['firstName']) || empty($_POST['lastName']) || empty($_POST['email']) || empty($_POST['message']) || empty($_POST['terms'])) {
        die('Please fill out all fields and agree to the terms.');
    }

    // Prepare data to send to Google Apps Script
    $data = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'email' => $_POST['email'],
        'message' => $_POST['message'],
    );

    // Google Apps Script Web App URL
    $url = 'https://script.google.com/macros/s/AKfycbw19kbMD3KGyFxCr6C0s8-vED_70cbTo6FD-YJcn6vASPXxyagU_FLnAgFue4IBFI_G/exec';

    // Initialize cURL
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
    ));

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check if the cURL request was successful
    if(curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        echo 'Data sent successfully!';
    }

    // Close cURL session
    curl_close($ch);
}

?>
