<?php
require __DIR__ . "/Genre.php"; //REMEMBER TO IMPORT THE CLASS USE INSIDE THE CONSTRUCT

class Production
{
    public $genre; //DO NOT specify string, cause u want to pass an object! (with "string" brake the code, fatal error)

    public function __construct(public string $title, public string $language, public int $vote, Genre $genre )
    {
        $this->genre = $genre;
    }
}

