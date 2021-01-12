<?php

namespace mvcobjet\Models\Entities;

class Movie {

    private $id;
    private $title;
    private $description;
    private $duration;
    private $date;
    private $cover_image;
    private $genre_id;
    private $director_id;

    public function getId() : int {
        return $this->id;
    }

    public function setId (int $id) : Movie {

        $this->id = $id;
        return $this;
    }

    public function getTitle() : string {
        return $this->title;
    }

    public function setTitle() : Movie {
        return $this;
    }

    public function getDescription() : string {
        return $this->description;
    }

    public function setDescription() : Movie {
        return $this;
    }

    public function getDuration() : string {
        return $this->duration;
    }

    public function setDuration() : Movie {
        return $this;
    }

    public function getDate() : string {
        return $this->date;
    }

    public function setDate() : Movie {
        return $this;
    }

    public function getCover_image() : string {
        return $this->cover_image;
    }

    public function setCover_image() : Movie {
        return $this;
    }

    public function getGenre_id() : int {
        return $this->genre_id;
    }

    public function setGenre_id() : Movie {
        return $this;
    }

    public function getDirector_id() : int {
        return $this->director_id;
    }

    public function setDirector_id() : Movie {
        return $this;
    }
}