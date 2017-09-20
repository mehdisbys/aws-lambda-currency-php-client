<?php

require_once __DIR__ . '/vendor/autoload.php';

use Aws\Lambda\LambdaClient;

$client = LambdaClient::factory([
                                    'region' => 'eu-west-2'
                                ]);


$response = NULL;

try {
    $response = $client->invoke([
                                    'FunctionName' => 'hello-go_golangHello',
                                    'Payload'      => ''
                                ]);
} catch (Throwable $e) {
    throw new Exception("Could not invoke Lambda function : {$e->getMessage()}");
}

$success = $response->getAll()['success'] ?? false;

if ($success == false) {
    throw new Exception("Could not call Currency API");

}

$subResponse = array_filter($response->getAll(), function ($k){ return in_array($k, ['source','timestamp', 'quotes']);}, ARRAY_FILTER_USE_KEY);

echo json_encode( $subResponse, JSON_PRETTY_PRINT);