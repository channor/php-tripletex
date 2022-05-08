<?php
/**
 * THIS IS ONLY AN EXAMPLE TO GIVE YOU AN IDEA HOW THIS REPO WORKS.
 * DON'T USE THESE EXAMPLES IN PRODUCTION / LIVE SERVER.
 */
require __DIR__ . '/../vendor/autoload.php';

// Change filename to '00-Tokens.ini' or specify the path outside this folder.
$tokens = parse_ini_file('../local/00-Tokens.ini');

// Use can set these arguments hard with your tokens.
// Remember to keep your tokens secret. Don't push or send any files including you tokens.
$app = new \Channor\Tripletex\TripletexApp(
    $tokens['consumerToken'],
    $tokens['employeeToken']
);
$service = new \Channor\Tripletex\Tripletex($app);

// REQUEST IS NOW POINTED TO api.tripletex.io/v2, NOT tripletex.no/v2
$service->getClient()->setTestEnvironment(true);

echo "Tripletex service is started.<br><br>";
