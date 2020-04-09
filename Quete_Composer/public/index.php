<?php 
require ("../vendor/autoload.php");

use App\Wcs\Hello;

$page1 = new \App\Wcs\Hello();
echo $page1->talk();

echo "<br>";
$page2 = new \App\Wcs\SayHello();
echo $page2->world();

