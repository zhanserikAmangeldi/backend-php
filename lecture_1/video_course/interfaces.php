<?php

interface iFly{
    function fly(): string;
}

class Bee implements iFly{
    function fly(): string
    {
        return "Bee is flying";
    }
}

class Owl implements iFly{
    function fly(): string {
        return "Owl is flying";
    }
}

$bee = new Bee();
$owl = new Owl();

$flyers = [$bee, $owl];

foreach ($flyers as $flyer) {
    echo $flyer->fly() . PHP_EOL;
}