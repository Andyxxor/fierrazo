<?php
require_once __DIR__ . '/../vendor/autoload.php';
$mongoClient = new MongoDB\Client("mongodb+srv://dsi4:andy100@myatlasclusteredu.scjwp.mongodb.net/?retryWrites=true&w=majority&appName=myAtlasClusterEDU");
$database = $mongoClient->selectDatabase('ferreteria');
$tasksCollection = $database->procesos;


