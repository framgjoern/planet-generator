<?php

use Stu\PlanetGenerator\PlanetGenerator;

require_once __DIR__.'/../vendor/autoload.php';

$planetTypeId = 201;

$planetGenerator = new PlanetGenerator();

$sep = 10;
// $sep = 7; // moons

$fields = $planetGenerator->generateColony($planetTypeId, 2);

foreach ($fields as $key => $field) {
    echo sprintf(
        '<img src="assets/generated/fields/%d.png" />',
        $field
    );
    if (($key + 1) % $sep === 0) {
        echo '<br />';
    }
}