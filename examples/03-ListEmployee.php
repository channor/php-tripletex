<?php
/**
 * THIS IS ONLY AN EXAMPLE TO GIVE YOU AN IDEA HOW THIS REPO WORKS.
 * DON'T USE THESE EXAMPLES IN PRODUCTION / LIVE SERVER.
 */

// Require 02-CreateSessionToken.php to have a valid session
require '02-CreateSessionToken.php';

$resource = $service->employee();

try {
    $action = $resource->list();
} catch (\Exception $e) {
    print('<pre>' . print_r(json_decode($e->getResponse()->getBody()->getContents()), true) . '</pre>');
    die;
}

echo "This is the TripletexResponse object:<br>";
print('<pre>' . print_r($action, true) . '</pre>');
