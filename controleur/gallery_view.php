<?php


require './model/ManageGallery.php';
require './model/ManagePhoto.php';
$gal = new ManageGallery();
$photo = new ManagePhoto();
$info_gallery = $gal->getGalleryInfos($id);
$liste = $photo->getPhotoList($id);

require './view/gallery_view.php';