<?php

namespace mvcobjet\Models\Daos;

use mvcobjet\Models\Entities\Movie;

class MovieDao extends BaseDao {

    public function findMovie($id){
        $stmt = $this->db->prepare("SELECT * FROM movie WHERE id = '$id'");
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
        $movie = new Movie();
        $movie->setId($fields['id'])
              ->setTitle($fields['title'])
              ->setDescription($fields['description'])
              ->setDuration($fields['duration'])
              ->setDate(\DateTime::createFromFormat('Y-m-d', $fields['date']))
              ->setCover_image($fields['cover_image']);
              /*->setGenre_id($fields['genre_id'])
              ->setDirector_id($fields['director_id']);*/
            

        return $movie;
    }
}