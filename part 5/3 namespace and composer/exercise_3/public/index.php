<?php

require_once __DIR__.'/../vendor/autoload.php';

$faker = Mattsmithdev\FakerSmallEnglish\Factory::create();

for ($i = 0; $i < 10; $i++) {
    echo $faker->name(), "\n";
}