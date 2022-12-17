<?php
include "vendor/autoload.php";

use Models\Student;
use MongoDB\BSON\ObjectID;

$client = new MongoDB\Client('mongodb://localhost:27017');
$connection = $client->local->students;

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
]);

$message = $_GET['message'] ?? null;

if ($message==1){
	$message  = "Added!";
}
if ($message==2){
	$message  = "Updated!";
}

if ($message==3){
	$message  = "Deleted!";
}
?>