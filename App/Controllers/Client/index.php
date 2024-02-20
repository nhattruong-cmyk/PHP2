<?php
require_once __DIR__ . '../../../../vendor/autoload.php';
ob_start();
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require "./global.php";
// require "./App/Models/pdo.php";
// require "./App/Models/taikhoan.php";
// require "./App/Models/sanbay.php";
// require "./App/Models/ve.php";


$pages = isset($_GET['pages']) ? $_GET['pages'] : 'home';

//Include header
require "App/Views/Client/include/header.php";
use App\Models\TaiKhoan;
use App\Models\Category;
use App\Models\Ve;

$ve = new Ve();

$tk = new TaiKhoan();
$cate = new Category();


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


    case 'sanpham': {
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
        include "App/Views/Client/account/register.php";
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
