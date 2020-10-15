<?php

require 'Vehicle.php';
require 'Truck.php';

$truck = new Truck('violet', 5, 'fuel', 15);

var_dump($truck);
echo "<br><br>";

echo $truck->forward().'<br>';
echo $truck->brake().'<br>';
echo $truck->isLoaded();
