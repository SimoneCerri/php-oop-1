<?php

/**
 * TVShow class
 * @author Simone Cerri
 * @copyright 2024 Simone Cerri
 * @license MIT
 */
class TVShow extends Production
{
    public function __construct($title, $language, $vote, $genre, public int $seasons)
    {
        parent::__construct($title, $language, $vote, $genre);//!IMPORTANT with new syntax too
    }
}
