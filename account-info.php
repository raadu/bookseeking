<?php 
session_start();
include("connect.php");

$username = $_SESSION["username"];

if(isset($_POST) & !empty($_POST))
{
  $username = mysqli_real_escape_string($connection, $_POST['username']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  
  $location = $_POST['location'];
  $contactnumber = $_POST['contactnumber'];

  $sql2 = "UPDATE userinfo SET email='$email', location='$location', contactnumber='$contactnumber' WHERE username='$username'";
  mysqli_query($connection,$sql2);
}


$sql = "SELECT * FROM userinfo WHERE username='$username'";
$result = mysqli_query($connection, $sql);

                
if($row = mysqli_fetch_array($result));
    {
        $username = $row["username"];
        $email = $row["email"];
        $location = $row["location"];
        $contactnumber = $row["contactnumber"];

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bookseeking - Dashboard</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

<!-- Header Area Starts -->
<section>
  <div class="container" style="height: 160px; margin-top: -100px; margin-bottom:50px;" >
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg  navigation">
          <a class="navbar-brand" href="index.html">
            <img style="height:280px; width:280px;" src="images/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto main-nav ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              
              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="category.html">Engineering</a>
                  <a class="dropdown-item" href="single.html">Business</a>
                  <a class="dropdown-item" href="store-single.html">English</a>
                  <a class="dropdown-item" href="dashboard.html">Comics</a>
                  <a class="dropdown-item" href="user-profile.html">Novels</a>
                  <a class="dropdown-item" href="submit-coupon.html">Poems</a>
                  <a class="dropdown-item" href="blog.html">Travel</a>
                  <a class="dropdown-item" href="single-blog.html">Religious</a>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Deals <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Buy</a>
                  <a class="dropdown-item" href="#">Sell</a>
                  <a class="dropdown-item" href="#">Borrow</a>
                  <a class="dropdown-item" href="#">Exchange</a>
                  <a class="dropdown-item" href="#">Lend</a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-10">
              <li class="nav-item">
                <a style="background-color:  #e74c3c; margin-right: 5px;" class="nav-link add-button" href="logout.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link add-button" href="post-ads.php"><i class="fa fa-plus-circle"></i> Add Post</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- Header Area Ends -->



  <section id="content">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-3"></div> 
          <div class="col-md-6" "col-md-offset-6" style="background-color:light;">
            <div class="page-login-form box">
              <div class="col-md-3"></div>
                Account Information
              </h3>

              
              <form method="POST" role="form" class="login-form">
                <div class="form-group">
                  <i class="icon fa fa-user"></i>
                    <input type="text" style="text-align:center" class="form-control" name="username" placeholder="Username" value= "<?php echo $row['username']; ?>" readonly> 
                </div>
                
                
                <div class="form-group">
                    <i class="icon fa fa-envelope"></i>
                    <input type="email" style="text-align:center" id="username" class="form-control" name="email" placeholder="Email" value= "<?php echo $row['email']; ?>">
                </div> 

                
                <div class="form-group">
                    <i class="icon fa fa-location-arrow"></i>
                    <input type="text" style="text-align:center" id="#" class="form-control" name="location" placeholder="Location" value= "<?php echo $row['location']; ?>">
                </div> 

                
                <div class="form-group">
                    <i class="icon fa fa-mobile"></i>
                    <input type="number" style="text-align:center" id="#" class="form-control" name="contactnumber" placeholder="Contact Number" value= "<?php echo $row['contactnumber']; ?>">
                </div>
                
                <button class="btn btn-success" style="background-color:green; margin-bottom: 20px; margin-top: 20px;" href="account-info.php">Update</button>


              </form>
            </div>
            <a class="btn btn-success" style="background-color: #16a085
; margin-bottom: 20px; margin-top: 20px; margin-right: 5px;" href="all-posts.php">All Books </a>
              <a class="btn btn-success" style="background-color:#16a085; margin-bottom: 20px; margin-top: 20px; margin-left: 5px;" href="account-myads.php"> My Books </a> 
          </div>

        </div>
      </div>

    </section>


    <!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo.png" alt="" style="width: 200px; height:80px;">
          <!-- description -->
          <p class="alt-color">Bookseeking is an online platform where users can exchange books with other users and also borrow, lend, buy and sell books online. </p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block"  style="margin-top:40px">
          
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block" style="margin-top:40px">
          
          <ul>
            <li><a href="#">Browse categories</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Donate</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7" style="margin-top:42px;">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="images/footer/phone-icon.png" alt="mobile-icon" >
          </a>
          <p>Get the BookSeeking Mobile App </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2017. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="js/scripts.js"></script>

</body>

</html>

