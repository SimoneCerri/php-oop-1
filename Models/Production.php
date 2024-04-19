<?php
require __DIR__ . "/Genre.php"; //REMEMBER TO IMPORT THE CLASS USE INSIDE THE CONSTRUCT

/**
 * Production class
 * @author Simone Cerri
 * @copyright 2024 Simone Cerri
 * @license MIT
 */
class Production
{
    public $genre; //DO NOT specify string, cause u want to pass an object! (with "string" brake the code, fatal error)

    public function __construct(public string $title, public string $language, public int $vote, Genre $genre ) //$genre need to assign it for use the class inside the class
    {
        $this->genre = $genre; //!IMPORTANT with new syntax too
    }

    //GETTERS
    public function getTitle()
    {
        return $this->title;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function getVote()
    {
        return $this->vote;
    }

    //SETTERS
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function setVote($vote)
    {
        $this->vote = $vote;
    }
}

