<?php

require_once 'route.php';

$route = new Route();

$route->add('setup', "setup");
$route->add('/', function() {
	echo 'HOME';
});

$route->add('/name', function() {
	echo 'Name';
});

$route->add('/name/.+', function($name) {
	echo "Name $name";
});


$route->add('/this/is/the/.+/story/of/.+', function($first, $second) {
	echo "This is the $first story of $second";
});


$route->listen();

function setup(){
	echo "Setup not Listed.";
}

?>