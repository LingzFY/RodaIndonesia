<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLiz7-LsU_Ghc-w2PlUJduIUR5P9tBI2c&callback=initMap&libraries=&v=weekly" defer></script> -->
<?php

// call header
include 'page/header.php';

$page = @$_GET['page'];
switch ($page) {
    case 'about_us':
        include "page/about/about_us.php";
        break;

    case 'info_user':
        include "page/info_user/info_user.php";
        break;

    case 'info_driver':
        include "page/info_driver/info_driver.php";
        break;

    case 'projek':
        include "page/projek/projek.php";
        break;

    case 'kontak':
        include "page/kontak/kontak_us.php";
        break;

    default:
        include 'page/content.php';
        break;
}

// call footer
include 'page/footer.php';
