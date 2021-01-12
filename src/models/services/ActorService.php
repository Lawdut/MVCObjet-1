<?php

namespace mvcobjet\Models\Services;

use mvcobjet\Models\Daos\ActorDao;
use mvcobjet\Models\Entities\Actor;


class ActorService {


    private $actorDao;

    public function __construct() {

        $this->actorDao = new ActorDao();
    }

    public function getAllActors() {

        $actors = $this->actorDao->findAll();
        return $actors;
    }
}