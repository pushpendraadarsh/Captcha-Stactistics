<?php
session_start();
if (isset($_GET['idtoken'])) {
// Get $id_token via HTTPS POST.

require_once 'vendor/autoload.php';

$id_token = $_GET['idtoken'];
$client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];
  echo $userid;
  // If request specified a G Suite domain:
  //$domain = $payload['hd'];
} else {
  // Invalid ID token
  echo "invalid";
}
}
?>