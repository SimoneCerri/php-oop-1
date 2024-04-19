<?php
require_once __DIR__ . "/../Models/Production.php"; //import class
require_once __DIR__ . "/../Models/Genre.php"; //import class

$productions = 
[
    new Production("Avatar", "Avatarese", 7, new Genre("Strange", "Is a fantasy about a big blue people, not Puffi")),
    new Production("StarWars", "English", 10, new Genre("Fantasy", "One of the best saga in history")),
    new Production("Batman", "English", 6, new Genre("Fantasy", "I'm Batman...")),
    new Production("Back to the Future", "English", 10, new Genre("Future", "Is not about where, but WHEN")),
    new Production("The Martian", "Martian", 8, new Genre("Future", "")),
    new Production("Kill Bill vol.1", "English", 10, new Genre("Historical", "Overkill peoples")),
];