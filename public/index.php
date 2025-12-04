<?php

header('Content-Type: application/json; charset=utf-8');

$data = [
    'id' => 12345,
    'name' => 'Aliev Magomeddibir Zamirovich',
    'email' => 'magomed157893@gmail.com',
    'age' => 24
];

echo json_encode($data);
