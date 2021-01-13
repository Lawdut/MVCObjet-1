<?php

namespace mvcobjet\Models\Daos;

use mvcobjet\Models\Entities\Movie;

class MovieDao extends BaseDao {

    public function findByMovie($id){
        $stmt = $this->db->prepare("SELECT * FROM movie WHERE id = '$id'");
        $res = $stmt->execute();
        if ($res) {
            
                return $this->createObjectFromFields($stmt->fetch(\PDO::FETCH_ASSOC));
            
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
              ->setCoverImage($fields['cover_image']);
            

        return $movie;
    }
}