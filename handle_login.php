<?php
require 'vendor/autoload.php'; // Include the Google API PHP Client

use Google_Client;

if (isset($_GET['id_token'])) {
    $client = new Google_Client(['client_id' => '82313681050-4k9vrhn907gv2p2lgvjdeok7hebhvivu.apps.googleusercontent.com.apps.googleusercontent.com']);
    $id_token = $_GET['id_token'];

    try {
        $payload = $client->verifyIdToken($id_token);
        if ($payload) {
            $userId = $payload['sub'];
            $email = $payload['email'];
            // You can save user information to session or database here
            session_start();
            $_SESSION['user_id'] = $userId;
            $_SESSION['email'] = $email;
            // Redirect to dashboard
            header('Location: dashboard.php');
            exit();
        } else {
            // Invalid ID token
            echo "Invalid ID token.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "No ID token received.";
}
?>
