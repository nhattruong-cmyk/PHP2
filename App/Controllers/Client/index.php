<?php
ob_start();

require "./global.php";
require "./App/Models/pdo.php";
require "./App/Models/taikhoan.php";
require "./App/Models/sanbay.php";
require "./App/Models/ve.php";


$pages = isset($_GET['pages']) ? $_GET['pages'] : 'home';

//Include header
require "App/Views/Client/include/header.php";

$tk = new TaiKhoan();

switch ($pages) {
    //-----------------------------------------------------Module Home---------------------------------------------------
    case 'home': {
            include "App/Views/Client/home/" . $pages . ".php";
            break;
        }

    case 'contact': {
            include "App/Views/Client/home/" . $pages . ".php";
            break;
        }

    case 'blog': {
            include "App/Views/Client/home/" . $pages . ".php";
            break;
        }

    case 'blog-detail': {
            include "App/Views/Client/home/" . $pages . ".php";
            break;
        }

    case 'timkiemve': {
            include "App/Views/Client/home/" . $pages . ".php";
            break;
        }
    case 'cart': {
            include "App/Views/Client/home/" . $pages . ".php";
            break;
        }
    //-----------------------------------------------------Module Account---------------------------------------------------
    case 'login': {
            include "App/Views/Client/account/" . $pages . ".php";
            break;
        }

    case 'register': {
            include "App/Views/Client/account/" . $pages . ".php";
            break;
        }

    case 'account': {
            include "App/Views/Client/account/" . $pages . ".php";
            break;
        }

    case 'edit': {
            include "App/Views/Client/account/" . $pages . ".php";
            break;
        }

    case 'forgotPassword': {
            include "App/Views/Client/account/" . $pages . ".php";
            break;
        }

    case 'finishForgot': {
            include "App/Views/Client/account/" . $pages . ".php";
            break;
        }

    case 'edit-pw': {
            include "App/Views/Client/account/" . $pages . ".php";
            break;
        }
    case 'logout': {
            include "App/Views/Client/account/" . $pages . ".php";
            break;
        }

    //-----------------------------------------------------Module Admin---------------------------------------------------
    case 'admin': {
            echo "<script>window.location.href = 'admin/index.php';</script>";
            break;
        }

    default: {
            include "App/Views/Client/home/404.php";
            break;
        }
}
//Include footer
require 'App/Views/Client/include/footer.php';
