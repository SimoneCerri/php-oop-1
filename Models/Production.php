<?php
require __DIR__ . "/Genre.php";

class Production
{
    public $genre; //DO NOT specify string, cause u want to pass an object!

    public function __construct(public string $title, public string $language, public int $vote, Genre $genre )
    {
        $this->genre = $genre;
    }
}

