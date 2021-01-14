<?php

namespace mvcobjet\Controllers;

use mvcobjet\Models\Services\MovieService;
use Twig\Environment;


class BackController {

    private $movieService;
    //private $twig;

    public function __construct(){
    
        $this->movieService = new MovieService();
        //$this->twig = $twig;
    }

    public function addMovie($movieData) {
        $this->movieService->create($movieData);
    }
}