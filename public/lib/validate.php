<?php
function check_login()
{
    global $ADMIN_URL;
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['vai_tro'] == 1) {
            return;
        }
        if (strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE) {
            return;
        }
    }
    $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
    header("location: $ADMIN_URL/pages/account/");
}
//--------------------------------------------------------------------------------------------------------------------------------------------------

//Check TenSanBay
function check_tensanbay($TenSanBay)
{
    $pattern = "/^[A-Za-z0-9\s]+$/";
    if (preg_match($pattern, $TenSanBay)) {
        return true;
    }
    return false;
}
function check_tennguoidung($TenNguoiDung)
{
    $pattern = "/^[A-Za-z0-9\s]+$/";
    if (preg_match($pattern, $TenNguoiDung)) {
        return true;
    }
    return false;
}

//Check LoaiVe
function check_LoaiVe($LoaiVe)
{
    $pattern = "/^[A-Za-z0-9\s]+$/";
    if (preg_match($pattern, $LoaiVe)) {
        return true;
    }
    return false;
}

// Check MaSanBay
function check_masanbay($MaSanBay)
{
    $pattern = "/^[0-9]/";
    if (preg_match($pattern, $MaSanBay)) {
        return true;
    }
    return false;
}


//Check DiaChi
function check_diachi($DiaChi)
{
    $parttern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($parttern, $DiaChi)) {
        return true;
    }
}

//Check ThongTinLienHe
function check_thongtinlienhe($ThongTinLienHe)
{
    $parttern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (preg_match($parttern, $ThongTinLienHe)) {
        return true;
    }
}

//Check password
function check_matkhau($MatKhau)
{
    $parttern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if (preg_match($parttern, $MatKhau)) {
        return true;
    }
}

// Check MaNguoiDung
function check_MaNguoiDung($MaNguoiDung)
{
    $pattern = "/^[0-9]/";
    if (preg_match($pattern, $MaNguoiDung)) {
        return true;
    }
    return false;
}

// Check MaVe
function check_MaVe($MaVe)
{
    $pattern = "/^[0-9]/";
    if (preg_match($pattern, $MaVe)) {
        return true;
    }
    return false;
}

//Function check form add sanbay------------------------------------------------------------------------------------------------------------------
function check_form_add_sanbay()


{
    global $IMAGE_DIR;
    $error = [];
    $TenSanBay = $_POST['TenSanBay'];
    $MaSanBay = $_POST['MaSanBay'];
    $DiaChi = $_POST['DiaChi'];
    $ThongTinLienHe = $_POST['ThongTinLienHe'];
    //---------------Check TenSanBay---------------
    if (!empty($TenSanBay)) {
        if (!check_tensanbay($TenSanBay)) {
            $error['error_tensanbay'] = 'The tensanbay has an incorect format!';
        }
    } else {
        $error['error_tensanbay'] = 'The tensanbay can’t be empty!';
    }

    // ---------------Check masanbay---------------
    if (!empty($MaSanBay)) {
        if (strlen($MaSanBay) > 10) {
            $error['error_masanbay'] = 'The masanbay is too long!';
        } elseif (!preg_match("/^[0-9]/", $MaSanBay)) {
            $error['error_masanbay'] = 'Invalid characters in masanbay! Please use only numeric digits.';
        }
    } else {
        $error['error_masanbay'] = 'The masanbay can’t be empty!';
    }
    

    //---------------Check DiaChi---------------
    if (!empty($DiaChi)) {
        if($DiaChi < 0){
            $error['error_diachi'] = 'The diachi must be not be more 0!';
        }else{
            if(strlen($DiaChi)>50){
                $error['error_diachi'] = 'The diachi too long!';
            }
        }
    }else{
        $error['error_diachi'] = 'The diachi can’t be empty!';
    }
  //---------------Check ThongTinLienHe---------------
  if (!empty($ThongTinLienHe)) {
    if($ThongTinLienHe < 0){
        $error['error_thongtinlienhe'] = 'The thongtinlienhe must be not be more 0!';
    }else{
        if(strlen($ThongTinLienHe)>50){
            $error['error_thongtinlienhe'] = 'The thongtinlienhe too long!';
        }
    }
}else{
    $error['error_thongtinlienhe'] = 'The thongtinlienhe can’t be empty!';
}
    if (!empty($error)) {
        $value = [
            'error' => $error
        ];
        return $value;

    } else {
        $value = [
            'TenSanBay' => $TenSanBay,
            'MaSanBay' => $MaSanBay,
            'DiaChi' => $DiaChi,
            'ThongTinLienHe' => $ThongTinLienHe
        ];
        return $value;
    }
    
}

//Function check form update sanbay------------------------------------------------------------------------------------------------------------------
function check_form_update_sanbay()


{
    global $IMAGE_DIR;
    $error = [];
    $TenSanBay = $_POST['TenSanBay'];
    $MaSanBay = $_POST['MaSanBay'];
    $DiaChi = $_POST['DiaChi'];
    $ThongTinLienHe = $_POST['ThongTinLienHe'];
    //---------------Check TenSanBay---------------
    if (!empty($TenSanBay)) {
        if (!check_tensanbay($TenSanBay)) {
            $error['error_tensanbay'] = 'The tensanbay has an incorect format!';
        }
    } else {
        $error['error_tensanbay'] = 'The tensanbay can’t be empty!';
    }

    // ---------------Check masanbay---------------
    if (!empty($MaSanBay)) {
        if (strlen($MaSanBay) > 10) {
            $error['error_masanbay'] = 'The masanbay is too long!';
        } elseif (!preg_match("/^[0-9]/", $MaSanBay)) {
            $error['error_masanbay'] = 'Invalid characters in masanbay! Please use only numeric digits.';
        }
    } else {
        $error['error_masanbay'] = 'The masanbay can’t be empty!';
    }
    

    //---------------Check DiaChi---------------
    if (!empty($DiaChi)) {
        if($DiaChi < 0){
            $error['error_diachi'] = 'The diachi must be not be more 0!';
        }else{
            if(strlen($DiaChi)>50){
                $error['error_diachi'] = 'The diachi too long!';
            }
        }
    }else{
        $error['error_diachi'] = 'The diachi can’t be empty!';
    }
  //---------------Check ThongTinLienHe---------------
  if (!empty($ThongTinLienHe)) {
    if($ThongTinLienHe < 0){
        $error['error_thongtinlienhe'] = 'The thongtinlienhe must be not be more 0!';
    }else{
        if(strlen($ThongTinLienHe)>50){
            $error['error_thongtinlienhe'] = 'The thongtinlienhe too long!';
        }
    }
}else{
    $error['error_thongtinlienhe'] = 'The thongtinlienhe can’t be empty!';
}
    if (!empty($error)) {
        $value = [
            'error' => $error
        ];
        return $value;

    } else {
        $value = [
            'TenSanBay' => $TenSanBay,
            'MaSanBay' => $MaSanBay,
            'DiaChi' => $DiaChi,
            'ThongTinLienHe' => $ThongTinLienHe
        ];
        return $value;
    }
    
}


//Function check form add Ve------------------------------------------------------------------------------------------------------------------
function check_form_add_ve()
{
    global $IMAGE_DIR;
    $error = [];
    // $MaVe = $_POST['MaVe'];
 
// Kiểm tra xem LoaiVe có tồn tại trong $_POST hay không
if (isset($_POST['LoaiVe'])) {
    $LoaiVe = $_POST['LoaiVe'];
    // Tiếp tục xử lý dữ liệu nếu cần
} else {
    // Xử lý khi LoaiVe không tồn tại
    $error['error_LoaiVe'] = 'Vui lòng chọn Loại Vé!';
}


// Kiểm tra xem MaSanBayXuatPhat có tồn tại trong $_POST hay không
if (isset($_POST['MaChuyenBay'])) {
    $MaChuyenBay = $_POST['MaChuyenBay'];
    // Tiếp tục xử lý dữ liệu nếu cần
} else {
    // Xử lý khi MaSanBayXuatPhat không tồn tại
    $error['error_MaChuyenBay'] = 'Vui lòng chọn MaSanBayDen!';
}

    $GiaVe = $_POST['GiaVe'];

    //---------------Check LoaiVe---------------
    if (empty($LoaiVe)) {
        $error['error_LoaiVe'] = 'The LoaiVe can’t be empty!';
    }
    // ---------------Check MaChuyenBay---------------
    if (empty($MaChuyenBay)) {
        $error['error_MaChuyenBay'] = 'The MaChuyenBay can’t be empty!';
    }


//---------------Check GiaVe---------------
if (!empty($GiaVe)) {
    if (!is_numeric($GiaVe) || $GiaVe <= 0) {
        $error['error_GiaVe'] = 'Giá Vé phải là số nguyên dương!';
    }
} else {
    $error['error_GiaVe'] = 'Giá vé không được để trống!';
}

    if (!empty($error)) {
        $value = [
            'error' => $error
        ];
        return $value;

    } else {
        $value = [
            
            'MaChuyenBay' => $MaChuyenBay,
            'LoaiVe' => $LoaiVe,
            'GiaVe' => $GiaVe

        ];
        return $value;
    }
    
}

//Function check form update Ve------------------------------------------------------------------------------------------------------------------
function check_form_update_ve()
{
    global $IMAGE_DIR;
    $error = [];

    // Kiểm tra và gán giá trị cho MaVe
    $MaVe = isset($_POST['MaVe']) ? $_POST['MaVe'] : null;
    if (empty($MaVe)) {
        $error['error_MaVe'] = 'Vui lòng chọn MaVe!';
    }

    // Kiểm tra và gán giá trị cho LoaiVe
    $LoaiVe = isset($_POST['LoaiVe']) ? $_POST['LoaiVe'] : null;
    if (empty($LoaiVe)) {
        $error['error_LoaiVe'] = 'Vui lòng chọn Loại Vé!';
    }

    // Kiểm tra và gán giá trị cho MaChuyenBay
    $MaChuyenBay = isset($_POST['MaChuyenBay']) ? $_POST['MaChuyenBay'] : null;
    if (empty($MaChuyenBay)) {
        $error['error_MaChuyenBay'] = 'Vui lòng chọn MaChuyenBay!';
    }

    // Kiểm tra và gán giá trị cho GiaVe
    $GiaVe = isset($_POST['GiaVe']) ? $_POST['GiaVe'] : null;
    if (!empty($GiaVe)) {
        if (!is_numeric($GiaVe) || $GiaVe <= 0) {
            $error['error_GiaVe'] = 'Giá Vé phải là số nguyên dương!';
        }
    } else {
        $error['error_GiaVe'] = 'Giá vé không được để trống!';
    }

    if (!empty($error)) {
        $value = [
            'error' => $error
        ];
        return $value;
    } else {
        $value = [
            'MaVe' => $MaVe,
            'MaChuyenBay' => $MaChuyenBay,
            'LoaiVe' => $LoaiVe,
            'GiaVe' => $GiaVe
        ];
        return $value;
    }
}


function check_form_add_chuyenbay()
{
    global $IMAGE_DIR;
    $error = [];
    $MaSanBay = isset($_POST['MaSanBay']) ? $_POST['MaSanBay'] : null;
    $MaSanBayXuatPhat = isset($_POST['MaSanBay']) ? $_POST['MaSanBay'] : null;
    $MaSanBayDen = isset($_POST['MaSanBay']) ? $_POST['MaSanBay'] : null;

    $NgayGioDen = isset($_POST['NgayGioDen']) ? $_POST['NgayGioDen'] : null;
    $NgayGioXuatPhat = isset($_POST['NgayGioXuatPhat']) ? $_POST['NgayGioXuatPhat'] : null;

    // Kiểm tra masanbay
    if (empty($MaSanBay)) {
        $error['error_masanbay'] = 'The masanbay can’t be empty!';
    } elseif (strlen($MaSanBay) > 10 || !is_numeric($MaSanBay)) {
        $error['error_masanbay'] = 'Invalid masanbay! Please use only numeric digits and keep it within 10 characters.';
    }

    // Kiểm tra kiểu dữ liệu của NgayGioDen và NgayGioXuatPhat (nếu cần)
    if (!empty($NgayGioDen) && !strtotime($NgayGioDen)) {
        $error['error_NgayGioDen'] = 'Invalid NgayGioDen format!';
    }

    if (!empty($NgayGioXuatPhat) && !strtotime($NgayGioXuatPhat)) {
        $error['error_NgayGioXuatPhat'] = 'Invalid NgayGioXuatPhat format!';
    }

    if (!empty($error)) {
        return ['error' => $error];
    } else {
        return [
            'MaSanBay' => $MaSanBay,
            'MaSanBayXuatPhat' => $MaSanBayXuatPhat,
            'MaSanBayDen' => $MaSanBayDen,
            'NgayGioXuatPhat' => $NgayGioXuatPhat,
            'NgayGioDen' => $NgayGioDen
        ];
    }
}


// Function check form add Nguoidung-------------------------------------------------------------------------------------------------------------------
function check_form_add_taikhoan()
{
    $error = [];
    if (isset($_POST['TenNguoiDung'])) {
        // Now you can safely use $_POST['TenNguoiDung']
        $TenNguoiDung = $_POST['TenNguoiDung'];
    } else {
        // Handle the case when 'TenNguoiDung' is not set
    }

    // Kiểm tra xem LoaiVe có tồn tại trong $_POST hay không
if (isset($_POST['QuyenTruyCap'])) {
    $QuyenTruyCap = $_POST['QuyenTruyCap'];
    // Tiếp tục xử lý dữ liệu nếu cần
} else {
    // Xử lý khi LoaiVe không tồn tại
    $error['error_QuyenTruyCap'] = 'Vui lòng chọn Loại Vé!';
}
    
    $MatKhau = $_POST['MatKhau'];


    //---------------Check TenNguoiDung---------------
    if (!empty($TenNguoiDung)) {
        if (!check_tennguoidung($TenNguoiDung)) {
            $error['error_tennguoidung'] = 'The tennguoidung has an incorect format!';
        }
    } else {
        $error['error_tennguoidung'] = 'The tennguoidung can’t be empty!';
    }


if (empty($QuyenTruyCap)) {
    $error['error_QuyenTruyCap'] = 'The QuyenTruyCap can’t be empty!';
}
 //---------------Check password---------------
    if (!empty($MatKhau)) {
        if (!check_matkhau($MatKhau)) {
            $error['error_matkhau'] = 'The matkhau has an incorect format!';
        }
    } else {
        $error['error_matkhau'] = 'The matkhau can’t be empty!';
    }


    if (!empty($error)) {
        $value = [
            'error' => $error
        ];
        return $value;
    } else {
        $value = [
            'TenNguoiDung' => $TenNguoiDung,
            'QuyenTruyCap' => $QuyenTruyCap,
            'MatKhau' => $MatKhau
        ];
        return $value;
    }
}


function check_form_update_taikhoan()
{
    $error = [];
    $MaNguoiDung = $_POST['MaNguoiDung'];
    if (isset($_POST['TenNguoiDung'])) {
        // Now you can safely use $_POST['TenNguoiDung']
        $TenNguoiDung = $_POST['TenNguoiDung'];
    } else {
        // Handle the case when 'TenNguoiDung' is not set
    }

    // Kiểm tra xem LoaiVe có tồn tại trong $_POST hay không
if (isset($_POST['QuyenTruyCap'])) {
    $QuyenTruyCap = $_POST['QuyenTruyCap'];
    // Tiếp tục xử lý dữ liệu nếu cần
} else {
    // Xử lý khi LoaiVe không tồn tại
    $error['error_QuyenTruyCap'] = 'Vui lòng chọn Loại Vé!';
}
    
    $MatKhau = $_POST['MatKhau'];


    //---------------Check TenNguoiDung---------------
    if (!empty($TenNguoiDung)) {
        if (!check_tennguoidung($TenNguoiDung)) {
            $error['error_tennguoidung'] = 'The tennguoidung has an incorect format!';
        }
    } else {
        $error['error_tennguoidung'] = 'The tennguoidung can’t be empty!';
    }


if (empty($QuyenTruyCap)) {
    $error['error_QuyenTruyCap'] = 'The QuyenTruyCap can’t be empty!';
}
 //---------------Check password---------------
    if (!empty($MatKhau)) {
        if (!check_matkhau($MatKhau)) {
            $error['error_matkhau'] = 'The matkhau has an incorect format!';
        }
    } else {
        $error['error_matkhau'] = 'The matkhau can’t be empty!';
    }


    if (!empty($error)) {
        $value = [
            'error' => $error
        ];
        return $value;
    } else {
        $value = [
            'MaNguoiDung' => $MaNguoiDung,
            'TenNguoiDung' => $TenNguoiDung,
            'QuyenTruyCap' => $QuyenTruyCap,
            'MatKhau' => $MatKhau
        ];
        return $value;
    }
}


?>