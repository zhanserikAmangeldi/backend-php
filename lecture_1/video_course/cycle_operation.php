<?php

$person_map = [ // map
    'name' => 'Zhanserik', // key => value
    'age' => 19,
    'hobby' => 'hiking',
    'isStudent' => true,
    'isMarried' => false,
    'pet' => 'cat',
    'petName' => 'Outworld Destroyer',
];

// foreach just to get values
foreach ($person_map as $item) {
    echo $item . "\n";
}

// foreach to get keys and values
foreach ($person_map as $key => $value) {
    echo $key . " => " . $value . "\n";
}
