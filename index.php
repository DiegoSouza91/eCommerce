<?php 

require_once("./vendor/autoload.php");

$app = new Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new DB\Sql();

	$results = $sql->select('SELECT * FROM client');

	echo json_encode($results);

});

$app->run();

 ?>