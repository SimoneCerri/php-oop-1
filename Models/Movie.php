<?php

/**
 * Movie class
 * @author Simone Cerri
 * @copyright 2024 Simone Cerri
 * @license MIT
 */
class Movie extends Production
{
    public function __construct($title, $language, $vote , $genre, public int $profit, public int $duration)
    {
        parent::__construct($title, $language,$vote, $genre);//!IMPORTANT with new syntax too
    }

    public function getDuration()
    {
        return $this->duration;
    }
}
