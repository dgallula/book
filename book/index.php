
<?php
require_once('models/Photos.php');
$photos = new Photos();
$photos = $photos->listerPhotos();
require_once('views/liste.photos.php');