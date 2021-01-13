<?php

namespace mvcobjet\Models\Services;

use mvcobjet\Models\Daos\DirectorDao;
use mvcobjet\Models\Entities\director;


class DirectorService {


    private $directorDao;

    public function __construct() {

        $this->directorDao = new DirectorDao();
    }

    public function getAllDirectors() {

        $directors = $this->directorDao->findAll();
        return $directors;
    }

    public function getOneDirector($id) {

        $director = $this->directorDao->findOne($id);
        return $director;

    }
}