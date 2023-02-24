<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $data = $_GET['data'];
    $time = time();

    // Save the data and time to a file or database

    $response = array('data' => $data, 'time' => $time);
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
