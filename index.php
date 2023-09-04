<?php
include("php/connection.php");

$sql = $conn->query("SELECT * FROM coffee WHERE id_coffee");

$sql_c = $conn->query("SELECT * FROM order_item");
$alldata = mysqli_num_rows($sql_c);

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Taste - Home </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Taste
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">Book Table</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="order.php">Order <span
                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
                    <?php echo $alldata ?>
                  </span></a>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa-solid fa-user" style="color: #ffffff;" aria-hidden="true"></i>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;" aria-hidden="true"></i>
                </button>
              </form>
              <a href="" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Espresso
                    </h1>
                    <p>
                      Espresso is a type of coffee that is produced by extracting ground coffee beans by spraying hot
                      water under high pressure. Espresso comes from Italian which means express or "fast" because it is
                      made to be served immediately to customers.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Americano
                    </h1>
                    <p>
                      Americano has a milder taste and is more pleasant to eat and has a thinner texture because a lot
                      of water is added. The taste of americano is universal and can be enjoyed by anyone, hot or cold.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Cappuccino
                    </h1>
                    <p>
                      A cup of coffee milk originating from Italy and starting to appear in Europe and America since the
                      1980s. A cup of cappuccino coffee has the same ratio of espresso, steamed milk and foam. The taste
                      of cappuccino coffee is generally very rich, even though it has been mixed with milk, the coffee
                      taste is still strong.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/o1.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Esspresso's Day
                </h5>
                <h6>
                  <span>15%</span> Off
                </h6>
                <a href="">
                  Order Now <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/o2.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Cappuccino Festival
                </h5>
                <h6>
                  <span>20%</span> Off
                </h6>
                <a href="">
                  Order Now <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Featured Menu
        </h2>
      </div>

      <br>

      <div class="d-flex justify-content-center flex-wrap">
        <?php
        while ($result = mysqli_fetch_assoc($sql)) { ?>
          <div class="box" style="max-width: 320px; width: 320px; margin: 0 20px 20px;">
            <div>
              <div class="img-box">
                <img class="rounded" src="menu/<?php echo $result['image']; ?>">
              </div>
              <div class="detail-box">
                <h5 class="text-capitalize">
                  <?php echo $result['name']; ?>
                </h5>
                <div class="options">
                  <h6>
                    IDR
                    <?php echo $result['price']; ?>K
                  </h6>
                  <a href="menu.php">
                    <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are Taste
              </h2>
            </div>
            <p>
              A coffee shop is a place that sells coffee and other food and soft drinks. Coffee shops usually have a
              relaxed and comfortable atmosphere, making them a popular place to hang out and relax. <br><br>

              Coffee shops offer various kinds of coffee, ranging from black coffee, milk coffee, to coffee with various
              toppings. Apart from coffee, coffee shops also usually offer food and other soft drinks, such as cakes,
              breads and heavy meals.
            </p>
            <a href="about.html">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
  <!-- <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- end book section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <br><br><br>
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">

          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  The first thing to pay attention to in assessing a cafe is the atmosphere. A good cafe should have a
                  comfortable and relaxing atmosphere, so that visitors can feel at home and relax. A comfortable
                  atmosphere can be created with an attractive interior design, the right lighting, and soft music.
                </p>
                <h6>
                  Muhammad Yusuf Habibi
                </h6>
                <p>
                  Expert Videography
                </p>
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>

          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  In addition to the atmosphere, the food and beverage menu is also an important factor that must be
                  considered in assessing a cafe. A good cafe must have a varied and delicious menu, so visitors can
                  choose according to taste. A diverse menu can also attract the interests of different visitors.
                </p>
                <h6>
                  Muhammad Abrar Haekal
                </h6>
                <p>
                  Basketball Athlete
                </p>
              </div>
              <div class="img-box">
                <img src="images/client2.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>

          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Friendly and professional service is also an important factor that must be considered in assessing a
                  cafe. Cafe employees must be friendly and polite to visitors, and provide fast and precise service.
                </p>
                <h6>
                  Imam Daffa Muntazhar
                </h6>
                <p>
                  Python Enginer
                </p>
              </div>
              <div class="img-box">
                <img src="images/client3.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa-solid fa-location-dot" style="color: #ffffff;" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa-solid fa-phone" style="color: #ffffff;" aria-hidden="true"></i>
                <span>
                  Call +62 8588 6877 910
                </span>
              </a>
              <a href="">
                <i class="fa-solid fa-envelope" style="color: #ffffff;" aria-hidden="true"></i>
                <span>
                  taste_cafee@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Taste
            </a>
            <p>
              Build everyone's happiness by opening a cafe that welcomes guests of all ages, along with
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span><a href="#"> Taste</a> All Rights Reserved By
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>