<?php
// Set the response header to JSON
header('Content-Type: application/json');

// Get the current time
$time = time();

// Format the time as a string
$time_str = date('Y-m-d H:i:s', $time);

// Create a JSON object with the time
$json_obj = array(
    'time' => $time_str
);

// Convert the JSON object to a string
$json_str = json_encode($json_obj);

// Return the JSON string as the response
echo $json_str;
?>
