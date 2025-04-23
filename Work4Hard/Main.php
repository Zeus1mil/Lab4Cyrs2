<?php

require_once 'Gardener.php';
require_once 'TomatoBush.php';


$plant = new TomatoBush(numTomatoes: 3);
$gardener = new Gardener(name: "Вася", plant: $plant);

Gardener::knowledgeBase();

$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
