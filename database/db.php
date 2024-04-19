<?php
require_once __DIR__ . "/../Models/Production.php"; //import class
require_once __DIR__ . "/../Models/Genre.php"; //import class

$Prod1 = new Production("First prod", "English", 1, new Genre("First name", "First description")); //you can also save the new Genre inside another variable
$Prod2Genre = new Genre("Second name", "Second description");
$Prod2 = new Production("Second prod", "English", 2, $Prod2Genre);


$productions = 
[
    new Production("First prod", "English", 1, new Genre("First name", "First description")),
    new Production("Second prod", "English", 2, new Genre("Second name", "Second description")),
];