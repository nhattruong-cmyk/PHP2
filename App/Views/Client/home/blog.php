<style>
  .container h2 {
    text-align: center;
    line-height: 400px;
    width: 100%;
    height: 400px;
    background-image: url(public/assets/images/banner_blog.jpg);
    background-size: 100% 100%;
    color: #fff;
    /* Màu chữ trắng */
    padding: 10px;
    /* Khoảng cách giữa nền và chữ */
    text-align: center;
    /* Căn giữa nội dung */
  }

  /* Reset default margin and padding */
  body,h1,h2,h3,p,ul 
  {
    margin: 0;
    padding: 0;
  }

  /* Apply box-sizing border-box globally */
  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }

  /* Page Preloder */
  #preloder {
    display: none;
  }

  /* Offcanvas Menu */
  .offcanvas-menu-overlay {
    background-color: rgba(0, 0, 0, 0.5);
    /* Màu nền overlay */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: none;
    z-index: 9999;
  }

  .offcanvas-menu-wrapper {
    position: fixed;
    top: 0;
    right: 0;
    height: 100%;
    width: 280px;
    background-color: #333;
    /* Màu nền của offcanvas menu */
    padding: 20px;
    z-index: 10000;
    display: none;
    overflow-y: auto;
  }

  .offcanvas__option {
    margin-bottom: 30px;
  }

  .offcanvas__links a {
    color: #fff;
    /* Màu chữ của các liên kết */
    display: block;
    margin-bottom: 10px;
    font-size: 16px;
    text-decoration: none;
  }

  .offcanvas__top__hover span {
    color: #fff;
  }

  .offcanvas__top__hover ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .offcanvas__top__hover li {
    color: #fff;
    cursor: pointer;
    font-size: 16px;
  }
  .header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
  }

  .header__top p,
  .header__text p {
    color: #fff;
  }

  .header__menu ul li a {
    color: #fff;
    font-size: 16px;
  }

  .header__menu ul li a:hover {
    color: #ffcc00;
  }
  .blog__item {
    margin-bottom: 30px;
  }

  .blog__item__text {
    background-color: #fff;
    padding: 20px;
    text-align: center;
  }

  .blog__item__text span,
  .blog__item__text h5,
  .blog__item__text a {
    color: #000;
  }

  .blog__item__text a {
    display: inline-block;
    margin-top: 10px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
  }
  .blog__item__text a:hover {
    color: #ffcc00;
  }
</style>
</header>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2>Our Blog</h2>
    </div>
  </div>
</div>
<section class="blog spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 16 February 2020</span>
            <h5>What Curling Irons Are The Best Ones</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 21 February 2020</span>
            <h5>Eternity Bands Do Last Forever</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 28 February 2020</span>
            <h5>The Health Benefits Of Sunglasses</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-4.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 16 February 2020</span>
            <h5>Aiming For Higher The Mastopexy</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-5.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 21 February 2020</span>
            <h5>Wedding Rings A Gift For A Lifetime</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-6.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 28 February 2020</span>
            <h5>The Different Methods Of Hair Removal</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-7.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 16 February 2020</span>
            <h5>Hoop Earrings A Style From History</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-8.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 21 February 2020</span>
            <h5>Lasik Eye Surgery Are You Ready</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="blog__item">
          <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-9.jpg"></div>
          <div class="blog__item__text">
            <span><img src="public/assets/images/banner-01.jpg" alt=""> 28 February 2020</span>
            <h5>Lasik Eye Surgery Are You Ready</h5>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
