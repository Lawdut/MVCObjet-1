<?php

namespace mvcobjet\Models\Services;


use mvcobjet\Models\Daos\MovieDao;
use mvcobjet\Models\Entities\movie;

class MovieService {

    private $movieDao;

    public function __construct() {

        $this->movieDao = new MovieDao;
    
    }

    public function getOneMovie($id) {

        $movie = $this->movieDao->findMovie($id);
        //print_r($movie);
        return $movie;
    }
}