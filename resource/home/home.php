<div class="container text-center">
  <div class="main-banner">
    <!-- form booking -------------------------------------------------------------------------------------------->
    <div class="item item-1">
      <div class="form-header">
        <h1>Booking</h1>
      </div>
      <div class="booking-form">

        <div class="select-box" id="ticketType">
          <label for="ticket">Loại Vé:</label>
          <select id="ticket">
            <option value="oneWay">Một chiều</option>
            <option value="roundTrip">Khứ hồi</option>
          </select>
        </div>

        <div class="select-box" id="departure">
          <label for="from">Điểm đi:</label>
          <select id="from">
            <option value="airport1">Sân bay 1</option>
            <option value="airport2">Sân bay 2</option>
          </select>
        </div>

        <div class="select-box" id="destination">
          <label for="to">Điểm đến:</label>
          <select id="to">
            <option value="airport3">Sân bay 3</option>
            <option value="airport4">Sân bay 4</option>
          </select>
        </div>

        <div class="select-box" id="departureTime">
          <label for="departTime">Thời gian đi:</label>
          <input type="datetime-local" id="departTime">
        </div>

        <div class="select-box" id="returnTime">
          <label for="returnTime">Thời gian về:</label>
          <input type="datetime-local" id="returnTime">
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
          <h1 class="text-primary display-1">Hello!</h1>
          <h4 class="text-dark mb-0">We invite you to celebrate our wedding</h4>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="row g-4 align-items-center">
              <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="d-flex">
                  <div class="text-end my-auto pe-4">
                    <h3 class="text-primary mb-3">Evelyn</h3>
                    <p class="text-dark mb-0" style="line-height: 30px;">Lorem Ipsum is simply dummy text of the
                      printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
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
                    <h3 class="text-primary mb-3">Anthony</h3>
                    <p class="text-dark mb-0" style="line-height: 30px;">Lorem Ipsum is simply dummy text of the
                      printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
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



    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/assets/images/banner-01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="public/assets/images/banner-01.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="public/assets/images/banner-01.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  
  <style>
    .container {
      padding-top: 20px;
    }

    .row {
      position: relative;
    }

    .row h1 {
      font-family: Arial, Helvetica, sans-serif;
      padding: 35px 0;
      text-align: center; /* Căn giữa nếu muốn */
    }

    .col {
      overflow: hidden;
      position: relative;
    }

    .col img {
      width: 100%;
      height: 300px;
      transition: filter 0.3s;
    }

    .col:hover img {
      filter: blur(4px);
    }

    .text-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 24px;
      font-weight: bold;
      opacity: 1;
      transition: color 0.3s, transform 0.3s;
      text-align: left; /* Căn đều 2 lề */
    }

    .col:hover .text-overlay {
      color: #00FF00; /* Đổi màu chữ thành màu xanh lá khi di chuột vào */
      transform: translate(-50%, -50%) scale(0.8); /* Nhỏ lại chữ khi di chuột vào */
    }

    .read-more-btn {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: transparent;
      color: #00FF00;
      padding: 10px 20px;
      border: 2px solid #00FF00;
      border-radius: 5px;
      cursor: pointer;
      opacity: 0;
      transition: opacity 0.3s;
      z-index: 1; /* Đảm bảo nút không đè lên chữ */
    }

    .col:hover .read-more-btn {
      opacity: 1;
    }
  </style>
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

