
<?php
$data = array(
    "value1" => "23",
    "value2" => "45",
    "timestamp" => time()
);
 
$json_data = json_encode($data);
 
header('Content-Type: application/json');
echo $json_data;
?>
