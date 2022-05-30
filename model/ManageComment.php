<?php
// Je récup ma class parente
require_once 'Manage.php';

// Je crée ma nouvelle class
class ManageComment extends Manage {
    // Je crée une méthode pour recup la liste des comment
    public function getCommentList(int $id):object {
        $data = ['id' => intval($id)];
        $query = "SELECT comment,author,mail FROM Comment WHERE photo_id=:id";
        return $this->getQuery($query,$data);
    }
    
    public function setComment(int $id, string $nom,   string $mail,  string $message):void {
        $data=[
            'comment' => $message,
            'author' => $nom,
            'mail' => $mail,
            'photo_id' => $id
        ];
        $query = "INSERT INTO Comment (photo_id, comment, author, mail, valid) VALUES (:photo_id, :comment, :author, :mail, 0)";

       $this->getQuery($query, $data);
    }
}

   
