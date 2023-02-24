<?php

// Create an array with data and time fields
$response = array(
    'data' => 'some data',
    'time' => date('Y-m-d H:i:s')
);

// Encode the array into JSON format
$json = json_encode($response);

// Set the HTTP Content-Type header to application/json
header('Content-Type: application/json');

// Send the JSON response to the client
echo $json;

?>
