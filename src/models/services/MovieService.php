<?php

namespace mvcobjet\Models\Services;


use mvcobjet\Models\Daos\MovieDao;
use mvcobjet\Models\Daos\DirectorDao;
use mvcobjet\Models\Daos\GenreDao;
//use mvcobjet\Models\Daos\ActorDao;
use mvcobjet\Models\Entities\movie;
//use mvcobjet\Models\Entities\actor;
use mvcobjet\Models\Entities\director;
use mvcobjet\Models\Entities\genre; 

class MovieService {

    private $movieDao;
    private $genreDao;
    //private $actorDao;
    private $directorDao;

    public function __construct() {

        $this->movieDao = new MovieDao();
        $this->genreDao = new GenreDao();
        $this->directorDao = new DirectorDao();
       // $this->genreDao = new ActorDao();
    
    }

    public function getOneMovie($id) {

        $movie = $this->movieDao->findByMovie($id);
        //print_r($movie);

        $genre = $this->genreDao->findByMovie($id);
        $movie->setGenre($genre);
        //print_r($movie);
        $director = $this->directorDao->findByMovie($id);
        $movie->setDirector($director);

        return $movie;
    }
}