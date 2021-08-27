<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">

    <title>Header Page</title>
    <link rel = "stylesheet" type = "text/css" href="Css_Files/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/style.css">
</head>
<body id="header_page">
<!-- Start Upper Bar -->

<div class="upper-bar">
    <div class="container-fluid">
        <div class="row" style="text-align: center;">
            <div class="col-sm header-span">
                <marquee behavior="scroll"><span> Free Shipping In Egypt </span>
                  <span class="get-quote"> Get your clothes Now! </span></marquee>
            </div>
        </div>
    </div>
</div>
<!-- End Upper Bar -->

<!--Start Icons Bar-->
<div class="icon-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="left-icon-bar col-sm clearfix" >
                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook  fa-2x" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/" target="_blank"> <i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="right-icon-bar" >
                <a class="col-sm ml-auto">
                    <a href="Store.php"> <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Icons Bar -->

<!-- Start NavBar -->
<nav id = "MainNav" class="navbar navbar-expand-lg navbar navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand " href="index.php">
          <span >Friends</span><span >Market </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="Accessories.php">ACCESSORIES <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Jackets.php">JACKETS</a>
                </li>
              <li class="nav-item">
                    <a class="nav-link" href="HOODIES.php">HOODIES</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="jeans&paints.php">JEANS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Admin Support</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<!-- End NavBar -->



<script src="Js_Files/jquery-3.3.1.min.js"></script>
<script src="Js_Files/bootstrap.min.js"></script>
<script type="text/javascript" src="Js_Files/script.js"></script>
</body>
