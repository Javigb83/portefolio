<?php
session_start();

// déconnexion
if(isset($_GET['deconex'])) {
    unset($_SESSION);
    session_destroy();
}

// gestion du formulaire
if(isset($_POST['submit']) && ($_POST['submit'])== "Ok" ) {
    if($_POST['nom']=='Javiera' && $_POST['pwd']=='040583') {
        $_SESSION['Auth'] = true;
        $_SESSION['nom'] = $_POST['nom'];
        
    } else {
        $auth = '<h2 class="rouge">Identification incorrecte!</h2>';
    }
}

//  controle d'identification
if(!isset($_SESSION['Auth']) || !$_SESSION['Auth']) {
    require './view/admin/login.php';
    exit;
}




if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = '';
}

if(isset($_GET['do'])) {
    $do = $_GET['do'];
} else {
    $do = '';
}

if(isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    $id = 0;
}



switch($action) {
    case 'gallery' : adminGallery($do,$id); //gerer galeries
    break;
    
    case 'photo' : adminPhoto(); 
    break;
    
    case 'comment' : adminComment(); //gerer comment
    break;
    
    default: adminHome(); //accueil admin
}




function adminGallery($do='', $id=0) {
    require './model/ManageGallery.php';
    $gal = new ManageGallery();
    
    // traitement de mon, form de creation
    if(isset($_POST['submit']) && $_POST['submit']=='Enregistrer') {
        $gal->createGallery($_POST['gal_name'], $_POST['gal_description']);
    }
    
    
    
    if(isset($do)) {
        switch($do) {
            case 'delete' : 
                $gal->deleteGallery($id);
                break;
            
            case 'modify' : 
                $bouton = 'Modifier';
                $gal_info = $gal->getGalleryInfos($id);
                break;   
                
            case 'create' : $bouton = 'Enregistrer';
            
        }
        
    }
    
  
    
    
    $liste = $gal->getGalleryList();
    require './view/admin/gallery.php';
}

function adminPhoto() {
    
}


function adminComment() {
    
}


function adminHome() {
    require './view/admin/home.php';
}

