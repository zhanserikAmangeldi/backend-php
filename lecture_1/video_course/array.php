<?php 

$person = ['Zhanserik', 19, 'hiking', true, false, 'cat', 'Outworld Destroyer']; // array

echo $person . "\n"; // will arise "error", because of there are no to_string()
print_r($person[0] . "\n");
print_r($person[1]) . "\n";
print_r($person);



$person_map = [ // map
    'name' => 'Zhanserik', // key => value
    'age' => 19,
    'hobby' => 'hiking',
    'isStudent' => true,
    'isMarried' => false,
    'pet' => 'cat',
    'petName' => 'Outworld Destroyer',
];

print_r($person_map);
print_r($person_map['name'] . "\n");

$person_map['favVideoGame'] = "Kingdom Come: Deliverance"; // add

unset($person_map['isMarried']); // delete

print_r($person_map['favVideoGame'] . "\n");

print_r($person_map['isMarried']); // undefined
