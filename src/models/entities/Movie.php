<?php

namespace mvcobjet\Models\Entities;

use DateTime;

class Movie {

    private $id;
    private $title;
    private $description;
    private $duration;
    private $date;
    private $cover_image;
    /*private $genre_id;
    private $director_id;*/

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

    public function setTitle(string $title) : Movie {
        $this->title = $title;
        return $this;
    }

    public function getDescription() : string {
        return $this->description;
    }

    public function setDescription(string $description) : Movie {
        $this->description = $description;
        return $this;
    }

    public function getDuration() : string {
        return $this->duration;
    }

    public function setDuration(string $duration) : Movie {
        $this->duration = $duration;
        return $this;
    }

    public function getDate() : \DateTime {
        return $this->date;
    }

    public function setDate(DateTime $date) : Movie {
        $this->date = $date;
        return $this;
    }

    public function getCover_image() : string {
        $this->coverImage = $coverImage;
        return $this->cover_image;
    }

    public function setCover_image(string $coverImage) : Movie {
        return $this;
    }

    /*public function getGenre_id() : int {
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
    }*/
}