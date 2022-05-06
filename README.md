# PHP Tripletex SDK
This is an unofficial PHP SDK to work with the Tripletex API.

The repo is not stable.

## Simple examples
### Start the Tripletex service
```php
$app = new \Channor\Tripletex\TripletexApp(
    'secret_consumer_key',
    'secret_employee_key'
);

$service = new \Channor\Tripletex\Tripletex($app, ['test_environment' => true]);
```
`'test_environment' => true` sets the host to `api.tripletex.io` for the API test environment.

```php
$session = $service->tokenSession()->create();
$token = $session->getPrettyBody()->getValue()->getToken();
$expirationDate = $session->getPrettyBody()->getValue()->getExpirationDate();

$service->getApp()
    ->setToken($token)
    ->setExpirationDate(new \DateTime($expirationDate));

var_dump($service->getApp()->hasValidToken()); // returns true. Ready for other requests.
```
### Response
In exception is not thrown, the response is wrapped in `TripletexResponse > TripletexResponseMultiple OR TripletexResponseSingle > Model (i.e. EmployeeModel)`.

TripletexResponse contains the original request, response headers, raw body (json usually), decoded body (array) and prettyBody (object of the modelclass).

## Links
* [Tripletex API v2 Swagger](https://tripletex.no/v2-docs/)
* [tripletex-api2 @ github](https://github.com/Tripletex/tripletex-api2)
* [Tripletex.no](https://tripletex.no)
