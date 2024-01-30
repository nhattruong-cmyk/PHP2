<?php
$sanbay = new SanBay();
$ve = new Ve();
$list_ve = $ve->ve_select_all();
$list_sanbay = $sanbay->sanbay_select_all();
?>

<div class="container text-center">
  <div class="main-banner">
    <!-- form booking -------------------------------------------------------------------------------------------->
    <div class="item item-1">
      <div class="form-header">
        <h1 class="cau1">Hãy Đến Cùng BookingStorm</h1>
        <h4 class="cau2">"Tận hưởng chuyến đi hoàn hảo - Đặt vé máy bay, bay đến giấc mơ của bạn!"</h4>
      </div>
      <div class="booking-form">
        <div class="select-box" id="departure">
          <label for="from">Loại vé:</label>
          <select id="ve-org" name="LoaiVe" class="select2 form-select" data-placeholder="Select Category"
            tabindex="-1">
            <option selected disabled>Chọn Vé</option>
            <option value="0">Một Chiều</option>
            <option value="1">Khứ Hồi</option>
          </select>
        </div>


        <div class="select-box" id="departure">
          <label for="from">Điểm đi:</label>
          <select id="masanbay-org" name="MaSanBay" class="select2 form-select " data-placeholder="Select Category"
            data-select2-id="category-org" tabindex="-1">
            <option selected value="1">Chọn Mã</option>
            <?php
            foreach ($list_sanbay as $item) {
              extract($item); ?>
              <option value=<?= $MaSanBay ?>><?= $MaSanBay . " - " . $TenSanBay ?></option>
              <?php
            }
            ?>
          </select>
        </div>
        <div class="select-box" id="return">
          <label for="from">Điểm Đến:</label>
          <select id="masanbay-org" name="MaSanBay" class="select2 form-select " data-placeholder="Select Category"
            data-select2-id="category-org" tabindex="-1">
            <option selected value="1">Chọn Mã</option>
            <?php
            foreach ($list_sanbay as $item) {
              extract($item); ?>
              <option value=<?= $MaSanBay ?>><?= $MaSanBay . " - " . $TenSanBay ?></option>
              <?php
            }
            ?>
          </select>
        </div>

        <div class="select-box" id="departureTime">
          <label for="departTime">Thời gian đi:</label>
          <input type="datetime-local" id="departTime">
        </div>

        <div class="select-box" id="returnTime">
          <label for="returnTime">Thời gian về:</label>
          <input type="datetime-local" id="departTime">
        </div>

        <div class="select-box" id="returnTime">
          <button class="search-btn" onclick="searchFlights()">Tìm Kiếm</button>
        </div>


      </div>

    </div>
    <!-- form booking end -------------------------------------------------------------------------------------------->

    <!-- banner-duoi -------------------------------------------------------------------------------------------->

    <div class="container-fluid position-relative py-5" id="weddingAbout">
      <div class="position-absolute" style="top: -35px; right: 0;">
        <img src="" class="img-fluid" alt="">
      </div>
      <div class="position-absolute" style="top: -10px; left: 0; transform: rotate(150deg);">
        <img src="" class="img-fluid" alt="">
      </div>
      <div class="container position-relative py-5">
        <div class="mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800;">
          <h1 class="text-primary display-1">Xin Chào!</h1>
          <h4 class="text-dark mb-0">"Chúng tôi mời bạn đến tham gia vào buổi kỷ niệm đám cưới của chúng tôi."</h4>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="row g-4 align-items-center">
              <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex">
                  <div class="text-end my-auto pe-4">
                    <h3 class="text-primary mb-3">Phương Tiện</h3>
                    <p class="text-dark mb-0" style="line-height: 30px;">
                      "Phương tiện di chuyển không chỉ là phương pháp để đến đích mà còn là những chuyến hành trình đầy
                      ý nghĩa,
                      nắm giữ những khoảnh khắc độc đáo ."
                    </p>
                  </div>
                  <img src="public/assets/images/banner-01.jpg" class="img-fluid img-border" alt="">
                </div>
              </div>
              <div class="col-lg-2 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center justify-content-center">
                  <i class="fa fa-heart fa-5x text-primary"></i>
                </div>
              </div>
              <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex">
                  <img src="public/assets/images/banner-01.jpg" class="img-fluid img-border" alt="">
                  <div class="my-auto ps-4">
                    <h3 class="text-primary mb-3">Cảnh Đẹp</h3>
                    <p class="text-dark mb-0" style="line-height: 30px;">
                      "Những chuyến phiêu lưu khám phá thế giới không chỉ mở rộng tầm nhìn
                      của chúng ta mà còn có thể là cơ hội để tình yêu nở rộ, với những kí ức đẹp như những địa điểm
                      chúng ta đã đến."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- banner-duoi end -------------------------------------------------------------------------------------------->

    <!-- banner --------------------------------------------------------------------------------------------------------------------------------------->

    <div class="row">
      <h1>Vẻ Đẹp Ưu Tú</h1>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/assets/images/banner1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="public/assets/images/banner2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="public/assets/images/banner3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- banner --------------------------------------------------------------------------------------------------------------------------------------->

  </div>

  </head>

  <body>

    <div class="container">
      <div class="row">
        <h1>Khám Phá Điểm Đến</h1>
      </div>
      <div class="row">
        <div class="col">
          <img src="public/assets/images/images_1.jpg" alt="">
          <div class="text-overlay">Các Địa Điểm Du Lịch Việt Nam Được Yêu Thích Ở Hạ Long</div>
          <button class="read-more-btn">Xem thêm</button>
        </div>
        <div class="col">
          <img src="public/assets/images/images_2.jpg" alt="">
          <div class="text-overlay">Các Địa Điểm Du Lịch Việt Nam Được Yêu Thích Ở Hạ Long</div>
          <button class="read-more-btn">Xem thêm</button>
        </div>
        <div class="col">
          <img src="public/assets/images/images_3.jpg" alt="">
          <div class="text-overlay">Các Địa Điểm Du Lịch Việt Nam Được Yêu Thích Ở Hạ Long</div>
          <button class="read-more-btn">Xem thêm</button>
        </div>
        <div class="col">
          <img src="public/assets/images/images_4.jpg" alt="">
          <div class="text-overlay">Các Địa Điểm Du Lịch Việt Nam Được Yêu Thích Ở Hạ Long</div>
          <button class="read-more-btn">Xem thêm</button>
        </div>
      </div>
    </div>