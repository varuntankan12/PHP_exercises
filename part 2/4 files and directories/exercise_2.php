<?php

// Find a sample JSON file online that’s accessible through a URL (for
// example, at https://jsonplaceholder.typicode.com/todos/1 ). Write a script that reads
// the JSON string from the URL, converts it to an array, and then uses
// var_dump() to display the array.

$link = "https://jsonplaceholder.typicode.com/todos/1";

$jsonData = file_get_contents($link);

$data = json_decode($jsonData, true);

var_dump($data);
