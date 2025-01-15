<?php

require('classes/Author.php');

$author = new Author('test', 'surname');

$author2 = new Author('test1', 'surname2');

$posts = [
    [
        'title' => 'How to learn PHP in right way',
        'content' => 'This is how you should to learn PHP in right way',
        'author' => $author
    ],
    [
        'title' => 'How to learn SQL in right way',
        'content' => 'This is how you should to learn SQL in right way',
        'author' => $author2
    ],
    [
        'title' => 'How to learn GOLANG in right way',
        'content' => 'This is how you should to learn GOLANG in right way',
        'author' => $author2
    ],
];

function hello_world_func(): string {
    return 'hello world!';
}