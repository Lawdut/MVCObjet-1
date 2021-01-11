<?php

namespace mvcobjet\Models\Services;


use mvcobjet\Models\Daos\GenreDao;
use mvcobjet\Models\Entities\Genre;



class GenreService
{
    private $genreDao;  

    public function __construct()
    {
        $this->genreDao = new GenreDao();
    }

    public function getAllGenres()
    {
        $genres = $this->genreDao->findAll();
        return $genres;
    }

}