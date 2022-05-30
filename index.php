<?php

//récupération des paramètres

$page = '';

if(isset($_GET['page'])) {
    $page = $_GET['page'];
}

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
}


//Routeur

switch($page) {
    case 'about' : 
        require './controleur/about.php';
         break;
    case 'contact' : 
        require './controleur/contact.php';
         break;
    case 'gallery' :
        require './controleur/gallery.php';
        break;
        
    case 'gallery_view' :
        require './controleur/gallery_view.php';
        break;
        
    case 'photo' : 
        require './controleur/photo.php';
         break;
         
    case 'admin' : 
        require './controleur/admin.php';
         break;
    
    default : 
        require './controleur/home.php';
}


