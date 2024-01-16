<style>
    .contact-form {
        margin-top: 20px;
        background-color: #aaaaaa;
        width: 100%;
        height: auto;
        padding-top: 10px;
        padding-bottom: 50px;

    }

    .col-lg-6 {
        background-color: #f5f5f5;
        /* Màu nền */
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        /* Bóng đậm hơn */
        padding: 10px;
        /* Tăng khoảng cách từ lề */
        width: 50%;
    }

    form {
        margin: 15px 0;
        /* Giảm khoảng cách */

    }

    h2 {
        margin-top: 20px;
        color: #333;
        /* Màu tiêu đề */
    }

    input {
        margin: 0px 0;
        padding: 10px;
        /* Tăng kích thước ô input */
        border: 1px solid #ddd;
        /* Viền ô input */
        border-radius: 5px;
        width: 50%;
        /* Độ rộng 100% */
        box-sizing: border-box;
        /* Kích thước ô input tính cả padding và border */
    }

    button {
        background-color: #337ab7;
        /* Màu nút */
        color: #fff;
        /* Màu chữ nút */
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        /* Hiệu ứng chuyển động màu nền */
    }

    button:hover {
        background-color: #45a049;
        /* Màu nền khi di chuột qua */
    }

    small {
        color: #d9534f;
        /* Màu chữ thông báo lỗi */
    }

    a {
        color: #337ab7;
        /* Màu liên kết */
        text-decoration: none;
        transition: color 0.3s;
        /* Hiệu ứng chuyển động màu chữ liên kết */
    }

    a:hover {
        color: #23527c;
        /* Màu chữ khi di chuột qua */
    }

    label {
        text-align: left;
        margin-left: 160px;
    }
</style>


<!-- login Section Begin -->
<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form text-center">
                    <h2><b>REGISTER</b> </h2>
                    <form method="post">
                        <div class="row">
                            <label for="">Nhập Tài Khoản</label>
                            <div class="col-lg-12 mt-1">

                                <input name="TenNguoiDung" type="text" placeholder="Username" required>
                            </div>
                            <label for="">Nhập Mật Khẩu</label>
                            <div class="col-lg-12 mt-1">

                                <input name="MatKhau" type="password" placeholder="Password" required>
                            </div>
                            <label for="">Xát Nhập Mật Khẩu</label>
                            <div class="col-lg-12 mt-1">

                                <input name="MatKhau" type="password" placeholder="Password" required>
                            </div>
                            <label for="">Email</label>
                            <div class="col-lg-12">

                                <input name="Email" type="email" placeholder="Email" required>
                            </div>
                            <label for="">Số Điện Thoại</label>
                            <div class="col-lg-12">

                                <input name="SoDienThoai" type="text" placeholder="SoDienThoai" required>
                            </div>
                            <div class="col-lg-12 mt-1">
                                <button name="login" type="submit" class="site-btn">REGISTER</button>
                            </div>
                            <div class="col-lg-12 mt-1 text-center">
                                <a href="?pages=login">Bạn đã có tài khoản?</a>
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