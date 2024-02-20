<?php
$sanbay = new App\Models\SanBay();
$chuyenbay = new App\Models\ChuyenBay();
$ve = new App\Models\Ve();
$cate = new App\Models\Category();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$list_chuyenbay = $chuyenbay->chuyenbay_select_all();
$list_sanbay = $sanbay->sanbay_select_all();
$list_cate = $cate->category_select_all();

?>

<html>
<link rel="stylesheet" href="public/assets/css/css_ve.css">
</html>
<style>
    .contactform {
        margin: 0 auto;
        width: 100%;
        height: auto;
    }

    .contact_head {
        margin: 0 auto;
        width: 85%;
        height: 400px;
        background-image: url(public/assets/images/banner-01.jpg);
        background-size: 100% 100%;
    }

    .contact-mb-4 {
        margin: 50px auto;
        width: 70%;
    }
</style>


<div class="contact_head">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <h4 class="cau2">"Hành khách cần chúng tôi hỗ trợ trong thời gian sớm? Hãy chủ
        động tìm kiếm giải pháp thông qua các chức năng trên website, ứng dụng di động của Vietnam Airlines, hoặc cung
        cấp
        thông tin theo mẫu để chúng tôi trợ giúp nhanh hơn!"</h4>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="shop__sidebar">
                <div class="shop__sidebar__search">
                    <form action="?pages=search_ve" method="post">
                        <input type="text" placeholder="Search..." name="kyw">
                        <input type="submit" name="timkiem"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg></input>
                    </form>
                </div>
                <div class="shop__sidebar__accordion">
                    <div class="accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseOne">Loại Vé</a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="shop__sidebar__categories">
                                        <ul class="nice-scroll">
                                            <?php
                                            foreach ($cate->category_select_all() as $item) {
                                                extract($item) ?>
                                                <li><a href="?pages=sanpham&MaLoai=<?= $MaLoai ?>"><?= $TenLoai ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-heading">
                                <a data-toggle="collapse" data-target="#collapseTwo">Sân Bay</a>
                            </div>
                            <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="shop__sidebar__categories">
                                        <ul class="nice-scroll">
                                            <?php
                                            foreach ($sanbay->sanbay_select_all() as $item) {
                                                extract($item) ?>
                                                <li><a href="?pages=sanpham&MaSanBay=<?= $MaSanBay ?>"><?= $TenSanBay ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="shop__product__option">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="shop__product__option__right">
                            <p>Tìm Kiếm Nhanh Theo Giá</p>
                            <select>
                                <option value="">Low To High</option>
                                <option value="">$0 - $55</option>
                                <option value="">$55 - $100</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <style>
                .product__item {
                    background-color: rgb(0, 150, 200);
                    height: 200px;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-around;
                    align-items: center;
                    border-radius: 15px;
                }

                .product__item>div {
                    text-align: center;
                    padding: 10px;
                    /* Điều chỉnh padding nếu cần thiết */
                }

                label {
                    padding-bottom: 20px;
                }

                /* Tùy chỉnh kiểu dáng cho các phần tử cụ thể */
                .mave,
                .xuatphat,
                .timedi,
                .timeve,
                .thoigianbay,
                .dichden {
                    flex: 1;

                    /* Phần tử sẽ chiếm đủ không gian ngang */
                }

                /* Điều chỉnh kiểu dáng của các tiêu đề */
                h3,
                h4 {
                    margin: 0;
                    /* Loại bỏ margin mặc định */
                }

                a {
                    color: white;
                }
            </style>


            <?php
            // Kiểm tra xem MaSanBay có tồn tại trong URL không
            if (isset($_GET['MaSanBay'])) {
                $MaSanBay = $_GET['MaSanBay'];
                // Gọi hàm getListVeByMaSanBay() để lấy danh sách vé theo MaSanBay đã chọn
                $list_ve = getListVeByMaSanBay($MaSanBay);
            } else {
                // Nếu không có MaSanBay trong URL, gọi hàm getListVe() để lấy tất cả các vé
                $list_ve = getListVe();
            }

            // Hiển thị danh sách vé
            foreach ($list_ve as $item) {
                extract($item);
            ?>
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="mave">
                                <label for="">Mã Vé</label>
                                <h3><?= $MaVe ?></h3>
                            </div>
                            <div class="xuatphat">
                                <label for="">Điểm Đi</label>
                                <h4><?= $MaSanBayXuatPhat ?></h4>
                            </div>
                            <div class="MaLoai">
                                <label for="">Loại Vé</label>
                                <h4><?= ($MaLoai == 1) ? 'Một Chiều' : (($MaLoai == 2) ? 'Khứ Hồi' : '') ?></h4>
                            </div>
                            <div class="dichden">
                                <label for="">Điểm Đến</label>
                                <h4><?= $MaSanBayDen ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>


            <?php
            function pdo_get_connection()
            {
                $servername = 'localhost';
                $dbname = 'php2';
                $username = 'root';
                $password = 'mysql';

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $conn;
                } catch (PDOException $e) {
                    die("Kết nối thất bại: " . $e->getMessage());
                }
            }


            // Hàm để lấy danh sách vé dựa trên MaSanBay

            function getListVeByMaSanBay($MaSanBay)
            {
                try {
                    $conn = pdo_get_connection();

                    $sql = "SELECT ve.*, chuyenbay.*, sbXuatPhat.*
                            FROM ve
                            INNER JOIN chuyenbay ON ve.MaChuyenBay = chuyenbay.MaChuyenBay
                            INNER JOIN sanbay AS sbXuatPhat ON chuyenbay.MaSanBayXuatPhat = sbXuatPhat.MaSanBay
                            WHERE sbXuatPhat.MaSanBay = :maSanBay
                            ORDER BY ve.MaVe ASC
                            LIMIT 20";

                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':maSanBay', $MaSanBay, PDO::PARAM_INT);
                    $stmt->execute();
                    $list_ve = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $conn = null;
                    return $list_ve;
                } catch (PDOException $e) {
                    die("Lỗi truy vấn: " . $e->getMessage());
                }
            }




            function getListVe()
            {
                try {
                    $conn = pdo_get_connection();

                    $sql = "SELECT ve.*, chuyenbay.*
                            FROM ve
                            INNER JOIN chuyenbay ON ve.MaChuyenBay = chuyenbay.MaChuyenBay
                            ORDER BY ve.MaVe ASC
                            LIMIT 20"; // Thêm mệnh đề LIMIT để chỉ lấy 4 vé

                    $stmt = $conn->query($sql);
                    $list_ve = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    $conn = null;
                    return $list_ve;
                } catch (PDOException $e) {
                    die("Lỗi truy vấn: " . $e->getMessage());
                }
            }
            ?>



                <!-- một vé ---------------------------------------------------------------------------------------------------------------------------------------->


                <!-- <div class="col-lg-12 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="mave">
                            <label for="">Mã Vé</label>
                            <h3>001</h3>
                        </div>
                        <div class="xuatphat">
                        <label for="">Điểm ĐI</label>
                            <h4>Vũng Tàu</h4>
                        </div>
                        <div class="timedi">
                        <label for="">Thời Gian Bay</label>
                            2020-01-01
                        </div>
                        <div class="timeve">
                            <label for="">Thời Gian Về</label>
                            20:00:00
                        </div>
                        <div class="thoigianbay">
                        <label for="">Thời Gian Bay</label>
                            20:00:00
                        </div>
                        <div class="dichden">
                        <label for="">Điểm Đến</label>
                            <h4>Sài Gòn</h4>
                        </div>
                    </div>
                </div> -->


                
                <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi-pocket Chest Bag</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$43.48</h5>
                                    <div class="product__color__select">
                                        <label for="pc-7">
                                            <input type="radio" id="pc-7">
                                        </label>
                                        <label class="active black" for="pc-8">
                                            <input type="radio" id="pc-8">
                                        </label>
                                        <label class="grey" for="pc-9">
                                            <input type="radio" id="pc-9">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Diagonal Textured Cap</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$60.9</h5>
                                    <div class="product__color__select">
                                        <label for="pc-10">
                                            <input type="radio" id="pc-10">
                                        </label>
                                        <label class="active black" for="pc-11">
                                            <input type="radio" id="pc-11">
                                        </label>
                                        <label class="grey" for="pc-12">
                                            <input type="radio" id="pc-12">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Ankle Boots</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$98.49</h5>
                                    <div class="product__color__select">
                                        <label for="pc-16">
                                            <input type="radio" id="pc-16">
                                        </label>
                                        <label class="active black" for="pc-17">
                                            <input type="radio" id="pc-17">
                                        </label>
                                        <label class="grey" for="pc-18">
                                            <input type="radio" id="pc-18">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>T-shirt Contrast Pocket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$49.66</h5>
                                    <div class="product__color__select">
                                        <label for="pc-19">
                                            <input type="radio" id="pc-19">
                                        </label>
                                        <label class="active black" for="pc-20">
                                            <input type="radio" id="pc-20">
                                        </label>
                                        <label class="grey" for="pc-21">
                                            <input type="radio" id="pc-21">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$26.28</h5>
                                    <div class="product__color__select">
                                        <label for="pc-22">
                                            <input type="radio" id="pc-22">
                                        </label>
                                        <label class="active black" for="pc-23">
                                            <input type="radio" id="pc-23">
                                        </label>
                                        <label class="grey" for="pc-24">
                                            <input type="radio" id="pc-24">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-9.jpg">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Piqué Biker Jacket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$67.24</h5>
                                    <div class="product__color__select">
                                        <label for="pc-25">
                                            <input type="radio" id="pc-25">
                                        </label>
                                        <label class="active black" for="pc-26">
                                            <input type="radio" id="pc-26">
                                        </label>
                                        <label class="grey" for="pc-27">
                                            <input type="radio" id="pc-27">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi-pocket Chest Bag</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>$43.48</h5>
                                    <div class="product__color__select">
                                        <label for="pc-28">
