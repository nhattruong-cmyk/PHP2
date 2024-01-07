<?php
require "../dao/pdo.php";
require "../dao/sanbay.php";
require "../dao/ve.php";
require "../dao/taikhoan.php";
require "../dao/chuyenbay.php";
require "../dao/hanhkhach.php";


// require "../dao/sanbay.php";
// require "../dao/order.php";
require "../lib/validate.php ";
// require "../lib/pagging/pagging.php ";
// require "../dao/binh-luan.php";
// require "../dao/statistic.php";

// if(isset($_SESSION['timestamp'])){
//     if(time() - $_SESSION['timestamp'] > 300) { //subtract new timestamp from the old one
//         echo"<script>alert('5 Minutes over!');</script>";
//         unset($_SESSION['user'], $_SESSION['timestamp']);        
//       } else {
//         $_SESSION['timestamp'] = time(); //set new timestamp
//       }
// }


        require "include/header.php";

        $pages = isset($_GET['pages']) ?  $_GET['pages'] : 'home';
        $sanbay    = new SanBay();
        $ve    = new Ve();
        $tk    = new TaiKhoan();
        $chuyenbay    = new ChuyenBay();
        $hanhkhach    = new HanhKhach();




        // $tk    = new KhachHang();
        // $bl    = new BinhLuan();
        // $role    = new Role();

        switch ($pages) {
            //-------------------------------------------------------Module Home---------------------------- 
            case 'home': {
                include "include/home.php";
                break;
            }

            //-------------------------------------------------------Module SanBay---------------------------- 
            case "list_sanbay": {
                $list_sanbay  = $sanbay->sanbay_select_all();
                include "resource/sanbay/list.php";
                break;
            }

            case "form_add_sanbay": {
                $list_sanbay  = $sanbay->sanbay_select_all();
                include "resource/sanbay/add.php";
                break;
            }

            case "insert_sanbay": {
                $value = check_form_add_sanbay();
                extract($value);
                if (empty($error)) {
                    try {
                        $sanbay->sanbay_insert($MaSanBay,$TenSanBay,$DiaChi,$ThongTinLienHe);
                        echo "<script>alert(\"Add successfully! \");</script>";
                    } catch (PDOException $e) {
                        throw $e;
                        echo "<script>alert(\"Add failed! \");</script>";
                    }
                    echo "<script>window.location.href ='index.php?pages=list_sanbay';</script>";
                } else {
                    $list_sanbay  = $sanbay->sanbay_select_all();
                    include "resource/sanbay/add.php";
                }
                break;
            }

            case "edit_sanbay": {
                $id = $_GET['MaSanBay'];
                $item = $sanbay->sanbay_select_by_id($id);
                $list_sanbay  = $sanbay->sanbay_select_all();
                include "resource/sanbaygories/edit.php";
                break;
            }

            case "update_sanbay": {
                // $value = check_form_update_sanbay();
                extract($value);

                if (empty($error)) {
                    try {
                        $sanbay->sanbay_update($MaSanBay, $TenSanBay,$DiaChi,$ThongTinLienHe);
                        echo "<script>alert(\"Update successfully! \");</script>";
                    } catch (PDOException $e) {
                        throw $e;
                        echo "<script>alert(\"Update failed! \");</script>";
                    }
                    echo "<script>window.location.href ='?pages=list_sanbay';</script>";
                } else {
                    $id = $_POST['MaSanBay'];
                    $item = $sanbay->sanbay_select_by_id($id);
                    include "resource/sanbay/edit.php";
                }
                break;
            }

            case "delete_sanbay": {
                $id = $_GET['MaSanBay'];
                try {
                    $sanbay->sanbay_delete($id);
                    echo "<script>alert(\"Delete successfully! \");</script>";
                } catch (PDOException $e) {
                    // throw $e;
                    echo "<script>alert(\"Delete failed! \");</script>";
                }
                echo "<script>window.location.href ='?pages=list_sanbay';</script>";
                break;
            }

            case "delete_all_sanbay": {
                $id = $_POST['MaSanBay'];
                try {
                    $sanbay->sanbay_delete($id);
                    echo "<script>alert(\"Delete successfully! \");</script>";
                } catch (PDOException $e) {
                    throw $e;
                    echo "<script>alert(\"Delete failed! \");</script>";
                }
                echo "<script>window.location.href ='?pages=list_sanbay';</script>";
                break;
            }


            // //------------------------------------------------------Module Ve------------------------------ 
            case 'list_ve': {
                $list_ve  = $ve->ve_select_all();
                include "resource/ve/list.php";
                break;
            }

            case 'add_ve': {
                $list_ve  = $ve->ve_select_all();
                include "resource/ve/add.php";
                break;
            }

            // case 'insert_product': {
            //     // $value = check_form_add_product();
            //     extract($value);
            //     if (empty($error)) {
            //         try {
            //             $db->product_insert($product_name, $price, $discount,$quantity, $images, $description, $MaSanBay);
            //             echo "<script>alert(\"Add successfully! \");</script>";
            //         } catch (PDOException $e) {
            //             throw $e;
            //             echo "<script>alert(\"Add failed! \");</script>";
            //         }
            //         echo "<script>window.location.href ='?pages=list_products';</script>";
            //     } else {
            //         $list_sanbay  = $sanbay->sanbay_select_all();
            //         include "resource/products/add.php";
            //     }
            //     break;
            // }

            // case 'update_product': {
            //     // $value = check_form_update_product();
            //     extract($value);

            //     if (empty($error)) {
            //         try {
            //             $db->product_update($product_id, $product_name, $price, $discount,$quantity, $images, $description, $MaSanBay);
            //             echo "<script>alert(\"Update successfully! \");</script>";
            //         } catch (PDOException $e) {
            //             throw $e;
            //             echo "<script>alert(\"Update failed! \");</script>";
            //         }
            //         echo "<script>window.location.href ='?pages=list_products';</script>";
            //     } else {
            //         $id = $_POST['product_id'];
            //         $item = $db->products_select_by_id($id);
            //         $list_sanbay  = $sanbay->sanbay_select_all();
            //         include "resource/products/edit.php";
            //     }
            //     break;
            // }

            // case 'edit_product': {
            //     $id = $_GET['product_id'];
            //     $item = $db->products_select_by_id($id);
            //     $list_sanbay  = $sanbay->sanbay_select_all();
            //     include "resource/products/edit.php";
            //     break;
            // }

            // case "delete_product": {
            //     $id = $_GET["product_id"];
            //     try {
            //         $db->product_delete($id);
            //         echo "<script>alert(\"Delete product successfully! \");</script>";
            //     } catch (PDOException $e) {
            //         throw $e;
            //     }
            //     echo "<script>window.location.href ='?pages=list_products';</script>";
            //     break;
            // }

            // case 'delete_all_product': {
            //     $id = $_POST["product_id"];
            //     try {
            //         $db->product_delete($id);
            //         echo "<script>alert(\"Delete product successfully! \");</script>";
            //     } catch (PDOException $e) {
            //         throw $e;
            //     }
            //     echo "<script>window.location.href ='?pages=list_products';</script>";
            //     break;
            // }
            // case 'add_pro': {
            //     include "resource/statistic/add_pro.php";
            //     break;
            // }


            // //-----------------------------------------------------Module Account---------------------------------------------------
            case 'list_taikhoan': {
                $list_tk = $tk->taikhoan_select_all();
                include "resource/taikhoan/list.php";
                break;
            }

            // case 'edit': {
            //     include "resource/account/" . $pages . ".php";
            //     break;
            // }

            // case 'edit-pw': {
            //     include "resource/account/" . $pages . ".php";
            //     break;
            // }

            // //-----------------------------------------------------Module ChuyenBay------------------------------------------------------
            case "list_chuyenbay": {
                $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
                include "resource/chuyenbay/list.php";
                break;
            }

            // case 'add_role': {
            //     include "resource/roles/form-add.php";
            //     break;
            // }

            // case 'insert_role': {
            //     // $value = check_form_add_role();
            //     extract($value);
            //     if (empty($error)) {
            //         try {
            //             $role->role_insert($role_name);
            //             echo "<script>alert(\"Add successfully! \");</script>";
            //         } catch (PDOException $e) {
            //             // throw $e;
            //             echo "<script>alert(\"Add failed! \");</script>";
            //         }
            //         echo "<script>window.location.href ='?pages=list_role';</script>";
            //     } else {
            //         $list_role  = $role->role_select_all();
            //         include "resource/roles/form-add.php";
            //     }
            //     break;
            // }

            // case 'update_role': {
            //     // $value = check_form_update_role();
            //     extract($value);

            //     if (empty($error)) {
            //         try {
            //             $role->update_role($role_id, $role_name);
            //             echo "<script>alert(\"Update successfully! \");</script>";
            //         } catch (PDOException $e) {
            //             throw $e;
            //             echo "<script>alert(\"Update failed! \");</script>";
            //         }
            //         echo "<script>window.location.href ='?pages=list_role';</script>";
            //     } else {
            //         $id = $_POST['role_id'];
            //         $item = $role->role_select_by_id($id);
            //         include "resource/roles/edit.php";
            //     }
            //     break;
            // }

            // case 'edit_role': {
            //     $id = $_GET['role_id'];
            //     $item = $role->role_select_by_id($id);
            //     include "resource/roles/edit.php";
            //     break;
            // }

            // case "delete_role": {
            //     $id = $_GET["role_id"];
            //     try {
            //         $role->role_delete($id);
            //         echo "<script>alert(\"Delete role successfully! \");</script>";
            //     } catch (PDOException $e) {
            //         echo "<script>alert(\"Delete failed! \");</script>";
            //     }
            //     echo "<script>window.location.href ='?pages=list_role';</script>";
            //     break;
            // }

            // case 'delete_all_role': {
            //     $id = $_POST["role_id"];
            //     try {
            //         $role->role_delete($id);
            //         echo "<script>alert(\"Delete role successfully! \");</script>";
            //     } catch (PDOException $e) {
            //         echo "<script>alert(\"Update failed! \");</script>";
            //     }
            //     echo "<script>window.location.href ='?pages=list_role';</script>";
            //     break;
            // }

            // //-----------------------------------------------------Module Hanh Khach------------------------------------------------------
            case 'list_hanhkhach': {
                $list_hanhkhach = $hanhkhach->hanhkhach_select_all();
                include "resource/hanhkhach/list.php";
                break;
            }

            // case 'add_user': {
            //     $list_user  = $tk->user_select_all();
            //     include "resource/user/add.php";
            //     break;
            // }

            // case 'insert_user': {
            //     // $value = check_form_add_customer();
            //     extract($value);
            //     if (empty($error)) {
            //         try {
            //             $tk->user_insert($username, $password, $fullname, $email, $phone, $avatar, $role_id, $address);
            //             echo "<script>alert(\"Add successfully! \");</script>";
            //         } catch (PDOException $e) {
            //             throw $e;
            //             echo "<script>alert(\"Add failed! \");</script>";
            //         }
            //         echo "<script>window.location.href ='?pages=list_account';</script>";
            //     } else {
            //         $list_user  = $tk->user_select_all();
            //         include "resource/user/add.php";
            //     }
            //     break;
            // }

            // case 'update_user': {
            //     // $value = check_form_update_customer();
            //     extract($value);
            //     if (empty($error)) {
            //         try {
            //             $tk->user_update($user_id, $username, $password, $fullname, $email, $phone, $avatar, $role_id, $address);
            //             echo "<script>alert(\"Update successfully! \");</script>";

            //         } catch (PDOException $e) {
            //             throw $e;
            //             echo "<script>alert(\"Update failed! \");</script>";
            //         }
            //         echo "<script>window.location.href = '?pages=list_account';</script>";
            //     } else {
            //         $id = $_POST['user_id'];
            //         $item = $tk->user_select_by_id($id);
            //         $list_user  = $tk->user_select_all();
            //         include "resource/user/edit.php";
            //     }
            //     break;
            // }

            // case 'edit_user': {
            //     $id = $_GET['user_id'];
            //     $item = $tk->user_select_by_id($id);
            //     $list_user  = $tk->user_select_all();
            //     include "resource/user/edit.php";
            //     break;
            // }
            // case "delete_user": {
            //     $id = $_GET["user_id"];
            //     try {
            //         $tk->user_delete($id);
            //         echo "<script>alert(\"Delete user successfully! \");</script>";
            //     } catch (PDOException $e) {
            //         throw $e;
            //     }
            //     echo "<script>window.location.href ='?pages=list_account';</script>";
            //     break;
            // }

            // case 'delete_all_user': {
            //     $id = $_POST["user_id"];
            //     try {
            //         $tk->user_delete($id);
            //         echo "<script>alert(\"Delete user successfully! \");</script>";
            //     } catch (PDOException $e) {
            //         throw $e;
            //     }
            //     echo "<script>window.location.href ='?pages=list_account';</script>";
            //     break;
            // }
            
            // //-----------------------------------------------------Module Orders----------------------------------------------------
            // case 'orders':{
            //     include "resource/orders/list.php";
            //     break;
            // }

            // case 'order_detail':{
            //     include "resource/orders/list_detail.php";
            //     break;
            // }

            // case 'order_delete':{
            //     include "resource/orders/delete.php";
            //     break;
            // }
            
            // case 'order_delete_all':{
            //     include "resource/orders/delete_all.php";
            //     break;
            // }

            // case 'delete_order_detail':{
            //     include "resource/orders/delete_order_detail.php";
            //     break;
            // }

            // //-----------------------------------------------------Module Comments--------------------------------------------------
            // case 'list-comment': {
            //     $comments = $bl->binh_luan_select_all();
            //     include "resource/comments/list.php";
            //     break;
            // }

            // case 'detail': {
            //     $detail_comment = $bl->binh_luan_get_detail($_GET['product_id']);
            //     include "resource/comments/detail.php";
            //     break;
            // }

            // case 'delete_comment': {
            //     $bl->binh_luan_delete_one($_GET['comment_id']);
            //     $comments = $bl->binh_luan_select_all();
            //     include "resource/comments/list.php";
            //     break;
            // }
            
            // //-----------------------------------------------------Module Statistic-------------------------------------------------
            // case 'statistic_comment': {
            //     include "resource/statistic/comment.php";
            //     break;
            // }
            //-----------------------------------------------------Module Statistic-------------------------------------------------
            default: {
                include "resource/home/404.php";
                break;
            }
        }
       
