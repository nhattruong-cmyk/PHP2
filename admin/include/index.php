<?php

$pages = isset($_GET['pages']) ? $_GET['pages'] : 'home';
include 'header.php';
switch ($pages) {
    case 'home':
        include 'home.php';
        break;

    case 'ticket':
        include 'ticket/list.php';
        break;

    default:
        include '404.php';
        break;
}
include 'footer.php';



?>