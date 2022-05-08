<?php
/**
 * THIS IS ONLY AN EXAMPLE TO GIVE YOU AN IDEA HOW THIS REPO WORKS.
 * DON'T USE THESE EXAMPLES IN PRODUCTION / LIVE SERVER.
 */

// Require 02-CreateSessionToken.php to have a valid session
require '02-CreateSessionToken.php';

$resource = $service->subscription();

parse_str($_SERVER['QUERY_STRING'], $query);

$id = $query['id'] ?? null;

if ($id === null) {
    throw new \Exception('The id parameter was not passed.');
}

try {
    $action = $resource->delete($id);
} catch (\Exception $e) {
    print('<pre>' . print_r($e->getResponse()->getBody()->getContents(), true) . '</pre>');
    die;
}

echo "This is the TripletexResponse object:<br>";
print('<pre>' . print_r($action, true) . '</pre>');
