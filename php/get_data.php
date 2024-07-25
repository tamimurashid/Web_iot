<?php
// get_data.php

// Set the content type to JSON
header('Content-Type: application/json');

// Read data from data.json file
$data = file_get_contents('../json/data.json');

// Output the data as is (assuming data.json contains valid JSON)
echo $data;

?>
