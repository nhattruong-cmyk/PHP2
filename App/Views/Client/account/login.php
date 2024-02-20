<?php
$errol = "";
if (isset($_POST["login"])) {
    $user = new App\Models\TaiKhoan();
    $data = $user->user_select_by_username($_POST["TenNguoiDung"]);
    if(!empty($data)){
        if($data['TenNguoiDung'] == $_POST["TenNguoiDung"] && $data['MatKhau'] == $_POST["MatKhau"]){
            $_SESSION['user'] = serialize($data);
            // $_SESSION['timestamp'] = time();
            
            // Redirect to home page
            header("Location: ?pages=home");
            exit();
        } else {
            $errol = 'Username or password is wrong';
        }
    } else {
        $errol = 'Username or password is wrong';
    }
}
?>

<style>
    .col-lg-6 {
        background-color: #f5f5f5; /* Màu nền */
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Bóng đậm hơn */
        padding: 10px; /* Tăng khoảng cách từ lề */
        width: 50%;
    }

    form {
        margin: 15px 0; /* Giảm khoảng cách */
        
    }

    h2 {
        margin-top: 20px;
        color: #333; /* Màu tiêu đề */
    }

    input {
        margin: 10px 0;
        padding: 10px; /* Tăng kích thước ô input */
        border: 1px solid #ddd; /* Viền ô input */
        border-radius: 5px;
        width: 50%; /* Độ rộng 100% */
        box-sizing: border-box; /* Kích thước ô input tính cả padding và border */
    }

    button {
        background-color: #337ab7; /* Màu nút */
        color: #fff; /* Màu chữ nút */
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s; /* Hiệu ứng chuyển động màu nền */
    }

    button:hover {
        background-color: #45a049; /* Màu nền khi di chuột qua */
    }

    small {
        color: #d9534f; /* Màu chữ thông báo lỗi */
    }

    a {
        color: #337ab7; /* Màu liên kết */
        text-decoration: none;
        transition: color 0.3s; /* Hiệu ứng chuyển động màu chữ liên kết */
    }

    a:hover {
        color: #23527c; /* Màu chữ khi di chuột qua */
    }
</style>


<!-- login Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form text-center">
                    <h2><b>LOGIN</b> </h2>
                    <form  method="post">
                        <div class="row">
                            <div class="col-lg-12 mt-1">
                                <input name="TenNguoiDung" type="text" placeholder="Username" required>
                            </div>
                            <div class="col-lg-12 mt-1">
                                <input name="MatKhau" type="password" placeholder="Password"required>
                            </div>
                            <div class="col-lg-12">
                                <small class="text-danger"><?= $errol ?? "" ?></small>
                            </div>
                            <div class="col-lg-12 mt-1">
                                <button name="login" type="submit" class="site-btn">Login</button>
                            </div>
                            <div class="col-lg-12 mt-1 text-center">
                                <a href="?pages=forgotPassword">For got Password?</a>
                            </div>
                            <div class="col-lg-12 mt-1 text-center">
                                <a href="?pages=register">Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- login Section End -->