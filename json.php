<?php
$person = [
    'name' => 'John Doe',
    'age' => 25,
    'email' =>'john@doe,com'
];

$json = '{"name":"John Doe","age":25,"email":"john@doe,com"}';

$personJson = json_encode($person);
$personArry = json_decode($json, true);

// echo $personArry['name'];

 print_r($personArry);

// echo $personJson;