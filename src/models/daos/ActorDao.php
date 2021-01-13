<?php

namespace mvcobjet\Models\Daos;

use mvcobjet\Models\Entities\Actor;

class ActorDao extends BaseDao {

    public function findAll(){
        $stmt = $this->db->prepare("SELECT * FROM actor ");
        $res = $stmt->execute();
        if ($res) {
            $actors = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $actors[] = $this->createObjectFromFields($row);
            }
            return $actors;
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function findOne($id){
        $stmt = $this->db->prepare("SELECT * FROM actor WHERE id = '$id' ");
        $res = $stmt->execute();
        if ($res) {
            $actors = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $actors[] = $this->createObjectFromFields($row);
            }
            return $actors;
            /*Ici on passe en créant un tableau et la fonction ci-dessous (createObject...) permet de créer un objet à partir d'un champ. Voir directordao pour comprender la différence. */
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        } 
    }

    public function findByMovie($movieId) {

        $stmt = $this->db->prepare("
        SELECT id, first_name, last_name
        FROM actor
        INNER JOIN movies_actors ON movies_actors.actor_id = actor.id
        WHERE movie_id = :movieId");
        $res = $stmt->execute([':movieId'=>$movieId]);

        if ($res) {
            $actors = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $actors[] = $this->createObjectFromFields($row);
            }
            return $actors;
        }else{
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }


    public function createObjectFromFields($fields): actor
    {
        //
        // liaison entre la donnée BDD et l'objet 
        // ici on voit le chainage ->setId->setName 
        //
        $actor = new actor();
        $actor->setId($fields['id'])
              ->setfirst_name($fields['first_name'])
              ->setlast_name($fields['last_name']);
            

        return $actor;
    }

}