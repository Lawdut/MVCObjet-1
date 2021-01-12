<?php

namespace mvcobjet\Models\Daos;

use mvcobjet\Models\Entities\Director;

class DirectorDao extends BaseDao {

    public function findAll(){
        $stmt = $this->db->prepare("SELECT * FROM director ");
        $res = $stmt->execute();
        if ($res) {
            $directors = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $directors[] = $this->createObjectFromFields($row);
            }
            return $directors;
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        }
    }

    public function findOne($id){
        $stmt = $this->db->prepare("SELECT * FROM director WHERE id = '$id' ");
        $res = $stmt->execute();
        if ($res) {

            //return $stmt->fetchObject(Director::class);
            $directors = [];
            while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
                $directors[] = $this->createObjectFromFields($row);
            }
            return $directors;
        } else {
            throw new \PDOException($stmt->errorInfo()[2]);
        } 
    }

    public function createObjectFromFields($fields): director
    {
        //
        // liaison entre la donnée BDD et l'objet 
        // ici on voit le chainage ->setId->setName 
        //
        $director = new director();
        $director->setId($fields['id'])
              ->setfirst_name($fields['first_name'])
              ->setlast_name($fields['last_name']);
            

        return $director;
    }
}

/*fetchObject à la place de fetch pour créer un objet

fetchobjet*/