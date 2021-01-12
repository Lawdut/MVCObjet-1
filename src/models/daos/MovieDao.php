<?php

namespace mvcobjet\Models\Daos;

use mvcobjet\Models\Entities\Movie;

class MovieDao extends BaseDao {

    public function findAll(){
        $stmt = $this->db->prepare("SELECT * FROM movie INNER JOIN genre ON movie.genre_id = genre.id");
        $res = $stmt->execute();
        if ($res) {
            $movies = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $movies[] = $this->createObjectFromFields($row);
            }
            return $movies;
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    } 
    
    public function createObjectFromFields($fields): movie
    {
        //
        // liaison entre la donnée BDD et l'objet 
        // ici on voit le chainage ->setId->setName 
        //
        $movie = new movie();
        $movie->setId($fields['id'])
              ->setTitle($fields['title'])
              ->setDescription($fields['description']);
              ->setDuration($fields['duration']);
              ->setDate($fields['date']);
              ->setCover_image($fields['cover_image']);
              ->setGenre_id($fields['genre_id']);
              ->setDirector_id($fields['director_id']);
            

        return $movie;
    }
}