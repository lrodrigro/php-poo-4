<?php

require_once 'Car.php';

$clio = new Car('Rouge', 5, 'essence');

$clio->setParkBrake(true);

try {
    echo $clio->forward();
    echo "<br> Vitesse de la voiture : " . $clio->getCurrentSpeed() . " km/h <br>";        
} catch(Exception $e) {
    // code to manage exceptions
    echo "<br>Attention, le frein à main été actif, maintenant le frein à main est desactif<br>";
    $clio->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}