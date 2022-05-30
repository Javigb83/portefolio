<?php

require './model/ManageGallery.php';
$gal = new ManageGallery();
$liste = $gal->getGalleryList();

require './view/galerie.liste.php'; 