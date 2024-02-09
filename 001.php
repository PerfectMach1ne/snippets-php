<!-- Okay, lemme just say... this is so hot and totally not one of the things that make me
want to get into PHP as a backend dev language SOOOO BAD, just to escape Python's advances a little. -->

<?php
$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);
?>