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
