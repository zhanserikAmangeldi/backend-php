<?php

$persons = [
    'johndoe' => [
        'name' => 'John Doe',
        'email' => 'john@doe.com',
        'gender' => 'male',
        'age' => 45,
    ],
    'janedoe' => [
        'name' => 'Jane Doe',
        'email' => 'jane@doe.com',
        'gender' => 'female',
        'age' => 45,
    ],
    'danieldoe' => [
        'name' => 'Daniel Doe',
        'email' => 'daniel@doe.com',
        'gender' => 'male',
        'age' => 15,
    ],
    'oliviadoe' => [
        'name' => 'Olivia Doe',
        'email' => 'olivia@doe.com',
        'gender' => 'female',
        'age' => 15,
    ]
];

foreach ($persons as $person) {
    if ($person['gender'] == 'male') {
        if ($person['age'] < 18) {
            echo $person['name'] . ', boy';
        }else {
            echo $person['name'] . ', man';
        }
    } else if ($person['gender'] == 'female') {
        if ($person['age'] < 18) {
            echo $person['name'] . ', girl';
        }else {
            echo $person['name'] . ', woman';
        }
    }

    echo PHP_EOL;
}
