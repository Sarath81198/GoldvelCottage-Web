<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die(header('location: /'));
}

require 'vendor/autoload.php';


$client = new MongoDB\Client(
    "mongodb+srv://developer:5Vu81JGWmHdvE74T@goldvelcottage-abprp.mongodb.net/goldvel_cottage?retryWrites=true&w=majority"
);


$db = $client->goldvel_cottage;

$collection = $db->rooms;
