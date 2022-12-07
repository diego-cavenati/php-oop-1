<?php

class Movie
{
    public static $type = 'Movie';
    public $title;
    public $description;
    public $year;
    public $rating;
    public $downloadLink;
    public $thumb;
    public $age;

    /**
     * @param string $title - title of the movie
     * @param string $description - 
     * @param int $year - 
     * @param int $rating - 
     * @param string $downloadLink - title of the movie
     * @param string $thumb - 
     */
    public function __construct(String $title, String $description, int $year, int $rating, String $downloadLink, String $thumb)
    {
        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
        $this->rating = $rating;
        $this->downloadLink = $downloadLink;
        $this->thumb = $thumb;
    }

    public function howOld($year)
    {
        return $this->age = 2022 - $year;
    }
}

// var_dump(Movie::$type);

$interstellar = new Movie('Interstellar', 'The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.', 2014, 4, 'https://download', 'https://thmb');

var_dump($interstellar->howOld(2015));
var_dump($interstellar);
