<?php
require "../../Models/pdo.php";
require "../../Models/sanbay.php";
require "../../Models/ve.php";
require "../../Models/taikhoan.php";
require "../../Models/chuyenbay.php";
require "../../Models/hanhkhach.php";
require "../../../public/lib/validate.php";

require "../../Views/Admin/include/header.php";

$pages = isset($_GET['pages']) ? $_GET['pages'] : 'home';
$sanbay = new SanBay();
$ve = new Ve();
$tk = new TaiKhoan();
$chuyenbay = new ChuyenBay();
$hanhkhach = new HanhKhach();


switch ($pages) {
    // //-------------------------------------------------------Module Home------------------------------------------------------------------ 
    case 'home': {
            include "../../Views/Admin/include/home.php";
            break;
        }
    // //-------------------------------------------------------Module Home------------------------------------------------------------------ 

    // //-------------------------------------------------------Module SanBay---------------------------------------------------------------- 
    case "list_sanbay": {
            $list_sanbay = $sanbay->sanbay_select_all();
            include "../../Controllers/Admin/sanbay/list.php";
            break;
        }

    case "form_add_sanbay": {
            $list_sanbay = $sanbay->sanbay_select_all();
            include "../../Controllers/Admin/sanbay/add.php";
            break;
        }

    case "insert_sanbay": {
            $value = check_form_add_sanbay();
            extract($value);
            if (empty($error)) {
                try {
                    $sanbay->sanbay_insert($MaSanBay, $TenSanBay, $DiaChi, $ThongTinLienHe);
                    echo "<script>alert(\"Add successfully! \");</script>";
                } catch (PDOException $e) {
                    throw $e;
                    echo "<script>alert(\"Add failed! \");</script>";
                }
                echo "<script>window.location.href ='index.php?pages=list_sanbay';</script>";
            } else {
                $list_sanbay = $sanbay->sanbay_select_all();
                include "../../Controllers/Admin/sanbay/add.php";
            }
            break;
        }

    case "edit_sanbay": {
            $id = $_GET['MaSanBay'];
            $item = $sanbay->sanbay_select_by_id($id);
            $list_sanbay = $sanbay->sanbay_select_all();
            include "../../Controllers/Admin/sanbay/edit.php";
            break;
        }

    case "update_sanbay": {
            $value = check_form_update_sanbay();
            extract($value);

            if (empty($error)) {
                try {
                    $sanbay->sanbay_update($MaSanBay, $TenSanBay, $DiaChi, $ThongTinLienHe);
                    echo "<script>alert(\"Update successfully! \");</script>";
                } catch (PDOException $e) {
                    throw $e;
                    echo "<script>alert(\"Update failed! \");</script>";
                }
                echo "<script>window.location.href ='?pages=list_sanbay';</script>";
            } else {
                $id = $_POST['MaSanBay'];
                $item = $sanbay->sanbay_select_by_id($id);
                include "../../Controllers/Admin/sanbay/edit.php";
            }
            break;
        }

    case "delete_sanbay": {
            $id = $_GET['MaSanBay'];
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

    // //-------------------------------------------------------Module SanBay---------------------------------------------------------------- 



    // //------------------------------------------------------Module Ve------------------------------------------------------------------ 
    case 'list_ve': {
            $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
            $list_ve = $ve->ve_select_all();
            include "../../Controllers/Admin/ve/list.php";
            break;
        }

    case 'form_add_ve': {
            $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
            $list_ve = $ve->ve_select_all();
            include "../../Controllers/Admin/ve/add.php";
            break;
        }



    case 'insert_ve': {
            $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
            $value = check_form_add_ve();
            extract($value);
            if (empty($error)) {
                try {
                    $ve->ve_insert($MaChuyenBay, $LoaiVe, $GiaVe);
                    echo "<script>alert(\"Add successfully! \");</script>";
                    echo "<script>window.location.href ='?pages=list_ve';</script>";
                } catch (PDOException $e) {
                    // Xử lý lỗi và thông báo lỗi một cách chặt chẽ
                    echo "<script>alert(\"Add failed! Error: " . $e->getMessage() . "\");</script>";
                }
            } else {
                $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
                include "../../Controllers/Admin/ve/add.php";
            }
            break;
        }

    case 'edit_ve': {
            $id = $_GET['MaVe'];
            $item = $ve->ve_select_by_id($id);
            $list_ve = $ve->ve_select_all();
            $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
            include "../../Controllers/Admin/ve/edit.php";
            break;
        }


    case 'update_ve': {
            $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
            $value = check_form_update_ve();
            extract($value);
            if (empty($error)) {
                try {
                    $ve->ve_update($MaVe, $MaChuyenBay, $LoaiVe, $GiaVe);
                    echo "<script>alert(\"Update successfully! \");</script>";
                } catch (PDOException $e) {
                    throw $e;
                    echo "<script>alert(\"Update failed! \");</script>";
                }
                echo "<script>window.location.href ='?pages=list_ve';</script>";
            } else {
                $id = $_POST['MaVe'];
                $item = $ve->ve_select_by_id($id);
                $list_ve = $ve->ve_select_all();
                $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
                include "../../Controllers/Admin/ve/edit.php";
            }
            break;
        }

    // //-----------------------------------------------------Module Ve------------------------------------------------------------------


    // //-----------------------------------------------------Module Tai Khoan------------------------------------------------------------

    case 'list_taikhoan': {
            $list_tk = $tk->taikhoan_select_all();
            include "../../Controllers/Admin/taikhoan/list.php";
            break;
        }

    case 'form_add_taikhoan': {
            $list_tk = $tk->taikhoan_select_all();
            include "../../Controllers/Admin/taikhoan/add.php";
            break;
        }

    case 'insert_taikhoan': {
            $value = check_form_add_taikhoan();
            extract($value);
            if (empty($error)) {
                try {
                    $tk->taikhoan_insert($TenNguoiDung, $MatKhau, $QuyenTruyCap);
                    echo "<script>alert(\"Add successfully! \");</script>";
                } catch (PDOException $e) {
                    // throw $e;
                    echo "<script>alert(\"Add failed! \");</script>";
                }
                echo "<script>window.location.href ='?pages=list_taikhoan';</script>";
            } else {
                echo "<script>alert(\"Add failed! \");</script>";
                $list_tk = $tk->taikhoan_select_all();
                include "../../Controllers/Admin/taikhoan/add.php";
            }
            break;
        }

    case 'form-update-taikhoan': {
            $id = $_GET['MaNguoiDung'];
            $item = $tk->taikhoan_select_by_id($id);
            $list_tk = $tk->taikhoan_select_all();
            include "../../Controllers/Admin/taikhoan/edit.php";
            break;
        }

    case 'update_taikhoan': {
            $value = check_form_update_taikhoan();
            extract($value);
            if (empty($error)) {
                try {
                    $tk->taikhoan_update($MaNguoiDung, $TenNguoiDung,$MatKhau,$QuyenTruyCap);
                    echo "<script>alert(\"Add successfully! \");</script>";
                } catch (PDOException $e) {
                    echo "<script>alert('Add failed! " . $e->getMessage() . "');</script>";
                }
                echo "<script>window.location.href ='?pages=list_taikhoan';</script>";
            } else {
                echo "<script>alert(\"Add failed! \");</script>";
                $id = $_POST['MaNguoiDung'];
                $item = $tk->taikhoan_select_by_id($id);
                $list_tk = $tk->taikhoan_select_all();
                include "../../Controllers/Admin/taikhoan/edit.php";
            }
            break;
        }
    // case 'edit-pw': {
    //     include "../../Controllers/Admin/account/" . $pages . ".php";
    //     break;
    // }

    // //-----------------------------------------------------Module Tai Khoan------------------------------------------------------------


    // //-----------------------------------------------------Module ChuyenBay-------------------------------------------------------------
    case "list_chuyenbay": {
            $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
            include "../../Controllers/Admin/chuyenbay/list.php";
            break;
        }

    case 'form_add_chuyenbay': {
            $list_sanbay = $sanbay->sanbay_select_all();
            include "../../Controllers/Admin/chuyenbay/add.php";
            break;
        }

    case 'insert_chuyenbay': {
            $value = check_form_add_chuyenbay();
            extract($value);
            if (empty($error)) {
                try {
                    $chuyenbay->chuyenbay_insert($MaSanBayXuatPhat, $MaSanBayDen, $NgayGioXuatPhat, $NgayGioDen);
                    echo "<script>alert(\"Add successfully! \");</script>";
                } catch (PDOException $e) {
                    // throw $e;
                    echo "<script>alert(\"Add failed! \");</script>";
                }
                echo "<script>window.location.href ='?pages=list_chuyenbay';</script>";
            } else {
                echo "<script>alert(\"Add failed! \");</script>";
                $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
                $list_sanbay = $sanbay->sanbay_select_all();
                include "../../Controllers/Admin/chuyenbay/add.php";
            }
            break;
        }
    case 'edit_chuyenbay': {
            $id = $_GET['MaChuyenBay'];
            $list_chuyenbay = $chuyenbay->chuyenbay_select_by_id($id);
            $list_chuyenbay = $chuyenbay->chuyenbay_select_all();
            $list_sanbay = $sanbay->sanbay_select_all();
            include "../../Controllers/Admin/chuyenbay/edit.php";
            break;
        }
    
    // //-----------------------------------------------------Module Chuyen Bay------------------------------------------------------

    // //-----------------------------------------------------Module Hanh Khach------------------------------------------------------
    case 'list_hanhkhach': {
            $list_hanhkhach = $hanhkhach->hanhkhach_select_all();
            include "../../Controllers/Admin/hanhkhach/list.php";
            break;
        }

    // //-----------------------------------------------------Module Hanh Khach----------------------------------------------------
   

    // //-----------------------------------------------------Module Statistic-------------------------------------------------
   
    // //-----------------------------------------------------Module Statistic-------------------------------------------------
    default: {
            // include "../../Views/Admin/include/home/404.php";
            break;
        }
        require "../../Views/Admin/include/footer.php";
}

