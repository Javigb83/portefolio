<?php

var_dump($_POST);



require './model/ManagePhoto.php';
require './model/ManageComment.php';



$photo = new ManagePhoto();
$info_photo = $photo->getInfoPhoto($id);

$comment = new ManageComment();
$list_comment = $comment->getCommentList($id);
    
    
if(isset($_POST['submit'])) {    
    if(isset($_POST['name'])) { $nom = htmlspecialchars($_POST['name']); 
        
    } else {
        $nom='';
    }
    
    if(isset($_POST['mail'])) { $mail = htmlspecialchars($_POST['mail']); 
        
    } else {
        $mail='';
    }
    
    if(isset($_POST['message'])) { $message = htmlspecialchars($_POST['message']); 
        
    } else {
        $message='';
    }
    


    
$comment->setComment($id, $nom, $mail, $message);

}




require './view/photo.php';