<?php
// CLASS ENFANT
function getPhotoList($id) {


    require './connexion/connexion.inc.php';
    
    $query = "SELECT id, nom, legend FROM photo WHERE gallery_id='".$id."'";
    $result = $db->query($query);
    return $result;
}


