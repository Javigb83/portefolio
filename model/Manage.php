<?php
// CLASSE PARENTE
class Manage {


    
    protected function db_connect() {
        $server = 'db.3wa.io';
        $login = 'javieragonzalez';
        $pwd = '0e53bb0235b2bb5eaee0cb6423a6dc61';
        $base = 'javieragonzalez_portfolio';
        
        
        try {
            $db = new PDO('mysql:host='.$server.';port=3306;dbname='.$base.';charset=utf8', $login, $pwd);    
        }
        catch (PDOException $e) {
            echo '<h3>Site en maintenance...</h3>';
            echo $e->getMessage();
            exit;
        }
        return $db;
    }
    
    protected function getQuery($query,$data = []) {
        $db = $this->db_connect();
        $stmt = $db->prepare($query);
        $stmt->execute($data);
        return $stmt;
    }
}
