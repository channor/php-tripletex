<?php
/**
 * THIS IS ONLY AN EXAMPLE TO GIVE YOU AN IDEA HOW THIS REPO WORKS.
 * DON'T USE THESE EXAMPLES IN PRODUCTION / LIVE SERVER.
 *
 * INCLUDE THIS FILE IN OTHER REQUEST AS IT SETS A VALID SESSIONTOKEN TO
 * AUTHENTICATE THE NEXT REQUEST.
 */

// Get the service we started in previous file.
require '01-StartService.php';

// Getting the tokenSession resource.
$session = $service->tokenSession();

try {
    $createSession = $session->create();
} catch (\Exception $e) {
    // If exception is caught, print the error envolope from tripletex.
    print('<pre>' . print_r(json_decode($e->getResponse()->getBody()->getContents()), true) . '</pre>');
}

$token = $createSession->getPrettyBody()->getValue()->getToken();
$expirationDate = $createSession->getPrettyBody()->getValue()->getExpirationDate();

$service->getApp()
    ->setToken($token)
    ->setExpirationDate(new \DateTime($expirationDate));

if ($service->getApp()->hasValidToken()) {
    echo "You have a valid token. The token expires " . $service->getApp()->getExpirationDate()->format('Y-m-d');
} else {
    echo "You do not have a valid token.";
}

echo "<br><br>";
