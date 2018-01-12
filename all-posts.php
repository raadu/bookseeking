<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bookseeking - All Books</title>
  
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

</head>
<body>
<body class="body-wrapper">

<!-- Header Starts Here -->
<section>
  <div class="container" style="height: 160px; margin-top: -100px; margin-bottom:0px;" >
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg  navigation">
          <a class="navbar-brand" href="index.html">
            <img style="height:250px; width:280px;" src="images/logo.png" alt="">
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
                <a class="nav-link login-button" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link add-button" href="post-ads.html"><i class="fa fa-plus-circle"></i> Add Post</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- Header Ends Here -->



<table method="POST" id="addManageTable" class="table table-striped table-bordered add-manage-table table demo"  style="margin-top: 145px;">
<thead>
<tr>
<th> Photo</th>
<th> Book Details</th>
<th> Price</th>
<th> Options</th>
</tr>
</thead>

<tbody>

<tr>
<td style="width:35%" class="add-img-td"><a href="ads-details.html"><img name="bookpic" class="thumbnail  img-responsive" src="images/himumama.jpg" alt="img" style="height: 250px; width: 250px;"></a></td>
<td style="width:70%" class="ads-details-td">
<div>
<p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Himu Mama</a> </strong></p>
<p><strong> Author </strong>:
Humayun Ahmed </p>
<p><strong> Publisher </strong>:
Onnoprokash </p>
<p><strong> Category </strong>: Novel </p> 
<p> <strong>Deal Type</strong> Exchange </p>
</div>
</td>

<td style="width:20%" class="price-td">
<div><strong> 0</strong></div>
</td>

<td style="width:20%" class="action-td">
<div>
<p style="color: black;"><a class="btn btn-success bg-info" style="width: 130px;"> <i class="fa fa-square"></i> Details </a>
</p>
<p style="color: black;"><a class="btn btn-success bg-success" style="width: 130px;"> <i class="fa fa-mail-forward"></i> Share
</a></p>
</div>
</td>
</tr>

<tr>
<td style="width:35%" class="add-img-td"><a href="ads-details.html"><img class="thumbnail  img-responsive" src="images/himumama.jpg" alt="img"></a></td>
<td style="width:70%" class="ads-details-td">
<div>
<p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Himu Mama</a> </strong></p>
<p><strong> Author </strong>:
Humayun Ahmed </p>
<p><strong> Publisher </strong>:
Onnoprokash </p>
<p><strong> Category </strong>: Novel </p> 
<p> <strong>Deal Type</strong> Exchange </p>
</div>
</td>

<td style="width:20%" class="price-td">
<div><strong> 0</strong></div>
</td>

<td style="width:20%" class="action-td">
<div>
<p style="color: black;"><a class="btn btn-success bg-info" style="width: 130px;"> <i class="fa fa-square"></i> Details </a>
</p>
<p style="color: black;"><a class="btn btn-success bg-success" style="width: 130px;"> <i class="fa fa-mail-forward"></i> Share
</a></p>
</div>
</td>
</tr>


<tr>
<td style="width:35%" class="add-img-td"><a href="ads-details.html"><img class="thumbnail  img-responsive" src="images/himumama.jpg" alt="img"></a></td>
<td style="width:70%" class="ads-details-td">
<div>
<p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Himu Mama</a> </strong></p>
<p><strong> Author </strong>:
Humayun Ahmed </p>
<p><strong> Publisher </strong>:
Onnoprokash </p>
<p><strong> Category </strong>: Novel </p> 
<p> <strong>Deal Type</strong> Exchange </p>
</div>
</td>

<td style="width:20%" class="price-td">
<div><strong> 0</strong></div>
</td>

<td style="width:20%" class="action-td">
<div>
<p style="color: black;"><a class="btn btn-success bg-info" style="width: 130px;"> <i class="fa fa-square"></i> Details </a>
</p>
<p style="color: black;"><a class="btn btn-success bg-success" style="width: 130px;"> <i class="fa fa-mail-forward"></i> Share
</a></p>
</div>
</td>
</tr>

<tr>
<td style="width:35%" class="add-img-td"><a href="ads-details.html"><img class="thumbnail  img-responsive" src="images/himumama.jpg" alt="img"></a></td>
<td style="width:70%" class="ads-details-td">
<div>
<p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Himu Mama</a> </strong></p>
<p><strong> Author </strong>:
Humayun Ahmed </p>
<p><strong> Publisher </strong>:
Onnoprokash </p>
<p><strong> Category </strong>: Novel </p> 
<p> <strong>Deal Type</strong> Exchange </p>
</div>
</td>

<td style="width:20%" class="price-td">
<div><strong> 0</strong></div>
</td>

<td style="width:20%" class="action-td">
<div>
<p style="color: black;"><a class="btn btn-success bg-info" style="width: 130px;"> <i class="fa fa-square"></i> Details </a>
</p>
<p style="color: black;"><a class="btn btn-success bg-success" style="width: 130px;"> <i class="fa fa-mail-forward"></i> Share
</a></p>
</div>
</td>
</tr>

<tr>
<td style="width:35%" class="add-img-td"><a href="ads-details.html"><img class="thumbnail  img-responsive" src="images/himumama.jpg" alt="img"></a></td>
<td style="width:70%" class="ads-details-td">
<div>
<p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Himu Mama</a> </strong></p>
<p><strong> Author </strong>:
Humayun Ahmed </p>
<p><strong> Publisher </strong>:
Onnoprokash </p>
<p><strong> Category </strong>: Novel </p> 
<p> <strong>Deal Type</strong> Exchange </p>
</div>
</td>

<td style="width:20%" class="price-td">
<div><strong> 0</strong></div>
</td>

<td style="width:20%" class="action-td">
<div>
<p style="color: black;"><a class="btn btn-success bg-info" style="width: 130px;"> <i class="fa fa-square"></i> Details </a>
</p>
<p style="color: black;"><a class="btn btn-success bg-success" style="width: 130px;"> <i class="fa fa-mail-forward"></i> Share
</a></p>
</div>
</td>
</tr>

<tr>
<td style="width:35%" class="add-img-td"><a href="ads-details.html"><img class="thumbnail  img-responsive" src="images/himumama.jpg" alt="img"></a></td>
<td style="width:70%" class="ads-details-td">
<div>
<p><strong> <a href="ads-details.html" title="Brend New Nexus 4">Himu Mama</a> </strong></p>
<p><strong> Author </strong>:
Humayun Ahmed </p>
<p><strong> Publisher </strong>:
Onnoprokash </p>
<p><strong> Category </strong>: Novel </p> 
<p> <strong>Deal Type</strong> Exchange </p>
</div>
</td>

<td style="width:20%" class="price-td">
<div><strong> 0</strong></div>
</td>

<td style="width:20%" class="action-td">
<div>
<p style="color: black;"><a class="btn btn-success bg-info" style="width: 130px;"> <i class="fa fa-square"></i> Details </a>
</p>
<p style="color: black;"><a class="btn btn-success bg-success" style="width: 130px;"> <i class="fa fa-mail-forward"></i> Share
</a></p>
</div>
</td>
</tr>


</tbody>
</table>
</div>

</div>
</div>

</div>

</div>

</div>



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


