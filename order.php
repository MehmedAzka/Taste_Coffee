<?php
include('php/connection.php');

// menampilkan data
$sql_c = $conn->query("SELECT * FROM order_item");

// total dari harga kopi yang dibeli
$count = $conn->query("SELECT sum(total_price) FROM order_item");

// menghitung data order
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

  <title> Taste </title>

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

<body class="sub_page">

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
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">Book Table</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="order.php">Order <span class="sr-only">(current)</span> <span
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
  </div>

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Your Order
        </h2>
      </div>

      <br>

      <div class="d-flex justify-content-center flex-wrap">
        <?php
        while ($result = mysqli_fetch_array($sql_c)) {
          ?>
          <div class="card" style="width: 320px; margin: 0 20px 20px; background-color: #222831; color: #fff;">
            <div class="card-body">
              <div class="detail-box">
                <h5 class="text-capitalize">
                  <?php echo $result['order_name']; ?>
                </h5>
                <p>
                  IDR
                  <?php echo $result['price']; ?>K
                </p>
                <div class="options">
                  <span class="d-flex justify-content-center">
                    <form action="php/action.php" method="post">
                      <button class="btn btn-outline-light" name="minus"><i
                          class="fa-regular fa-square-minus"></i></button>
                    </form>

                    <input value="<?php echo $result['amount']; ?>" type="text" class="form-control" aria-label="Username"
                      aria-describedby="basic-addon1" style="max-width: 54px; text-align: center;" disabled>

                    <form action="php/action.php" method="post">
                      <input type="hidden" name="id_order" value="<?= $result['id_order'] ?>">
                      <button type="submit" class="btn btn-outline-light" name="plus"><i class="fa-regular fa-square-plus"></i></button>
                    </form>
                  </span>

                </div>
              </div>
            </div>
          </div>
        <?php }
        ?>
      </div>

    </div>

    <div class="btn-box">
      <a href="">
        <?php while ($r = mysqli_fetch_array($count)) { ?>
          Pay IDR
          <?php echo $r['sum(total_price)']; ?>K
        <?php } ?>
      </a>
    </div>

  </section>

  <!-- end food section -->

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