<?php

// Create a variable to store the JSON text.
$json_text = '"Hello"';

// Encode the JSON text.
$json_encoded = json_encode($json_text);

// Set the Content-Type header to application/json.
header('Content-Type: application/json');

// Output the JSON text.
echo $json_encoded;
