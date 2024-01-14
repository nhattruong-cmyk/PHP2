<?php
ob_start();

require "./global.php";
require "./dao/pdo.php";
require "./dao/taikhoan.php";

$pages = isset($_GET['pages']) ? $_GET['pages'] : 'home';

//Include header
require "include/header.php";

$tk = new TaiKhoan();

switch ($pages) {
    //-----------------------------------------------------Module Home---------------------------------------------------
    case 'home': {
            include "resource/home/" . $pages . ".php";
            break;
        }

    case 'contact': {
            include "resource/home/" . $pages . ".php";
            break;
        }

    case 'blog': {
            include "resource/home/" . $pages . ".php";
            break;
        }

    case 'blog-detail': {
            include "resource/home/" . $pages . ".php";
            break;
        }

    case 'about': {
            include "resource/home/" . $pages . ".php";
            break;
        }
    case 'cart': {
            include "resource/home/" . $pages . ".php";
            break;
        }
    //-----------------------------------------------------Module Account---------------------------------------------------
    case 'login': {
            include "resource/account/" . $pages . ".php";
            break;
        }

    case 'register': {
            include "resource/account/" . $pages . ".php";
            break;
        }

    case 'account': {
            include "resource/account/" . $pages . ".php";
            break;
        }

    case 'edit': {
            include "resource/account/" . $pages . ".php";
            break;
        }

    case 'forgotPassword': {
            include "resource/account/" . $pages . ".php";
            break;
        }

    case 'finishForgot': {
            include "resource/account/" . $pages . ".php";
            break;
        }

    case 'edit-pw': {
            include "resource/account/" . $pages . ".php";
            break;
        }
    case 'logout': {
            include "resource/account/" . $pages . ".php";
            break;
        }

    //-----------------------------------------------------Module Admin---------------------------------------------------
    case 'admin': {
            echo "<script>window.location.href = 'admin/index.php';</script>";
            break;
        }

    default: {
            include "resource/home/404.php";
            break;
        }
}
//Include footer
require 'include/footer.php';
