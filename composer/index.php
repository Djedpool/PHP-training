<?php

require_once __DIR__ . '/vendor/autoload.php';

/** Only for php 7 group decleration **/
//use Acme\ {
//
//    Db,
//    Page,
//    User,
//
//};

use Acme\Db;
use Acme\Page;
use Acme\User;

$faker = Faker\Factory::create();

echo $faker->name;
echo "<br>";
echo $faker->address;
echo "<br>";
echo $faker->text;
echo "<br>";

$page1 = new Page();


