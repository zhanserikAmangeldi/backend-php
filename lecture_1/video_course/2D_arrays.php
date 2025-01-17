<?php

$persons = [
    'johndoe' => [
        'name' => 'John Doe',
        'email' => 'john@doe.com',
    ],
    'janedoe' => [
        'name' => 'Jane Doe',
        'email' => 'jane@doe.com',
    ],
    'danieldoe' => [
        'name' => 'Daniel Doe',
        'email' => 'daniel@doe.com',
    ],
    'juniordoe' => [
        'name' => 'Junior Doe',
        'email' => 'junior@doe.com',
    ]
];

print_r($persons);

echo "Full Names: \n";
foreach ($persons as $person) {
    echo $person['name'] . PHP_EOL;
}


foreach ($persons as $username => $account) {
    echo $username . " => " . print_r($account, true) . PHP_EOL;
}
