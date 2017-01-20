<?php
use Manju\Models\Driver;
use Manju\Models\Race;
require 'models/Driver.php';
require 'models/Race.php';
echo "<pre>";
echo 'Welcome to PHP Namespace Example';
echo "<hr>";

$driver = new Driver();
print_r($driver->listAll());
$race = new Race();
print_r($race->listAll());