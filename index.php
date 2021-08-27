<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">

    <title>Friends Market</title>
    <link rel = "stylesheet" type = "text/css" href="Css_Files/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/style.css">
</head>
<body id="index_page">
<?php
include "Main_Header.php";
?>
    <!--

    -->

    <!-- Start Slider -->

    <div class="container" >
        <div id="carouselExampleIndicators" class="carousel slide car-slider" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Images/Home_Page/Main_Image_2_4040x2738.jpg" title ="Home img" alt="Home Image">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Home_Page/adult-architecture-boutique-2460438.jpg"  title ="Shoes" alt="Shoes Image">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Images/Home_Page/boutique-close-up-clothes-1884.jpg" title ="Close Up Clothes" alt="Clothes">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Slider -->

    <div class="title-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2>Feel Free to Shop</h2>
                    <p>Your Shopping Journey starts here.</p>
                  <h3>Notice</h3><p>Some of our products <a href="#cont" style="font-size:20px;color:red;text-decoration:none; ">Below</a>  </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin Content -->

<?php
$result = $con->query("SELECT img, price, describtion FROM items where subcatg = 'Hoodies'")
or die($con->error);
$resultCheck = mysqli_num_rows($result);
?>

<?php
if ($resultCheck >0 ){
    while ($product = $result->fetch_assoc()){
        echo"<div class='container' id='cont'> 
                <div class='pro'>
                    <div id ='div-design' class='container3'>
                        <div id='card-design' class='card'>
                            <img src=".$product['img'] ." class='card-img-top' style='padding: 10px;'>
                            <div class='card-body'>
                                <h5 class='card-title'>" .$product['describtion']."</h5>
                                <p class='card-text'>".$product['price']."</p>
                                <a href='#' onclick='gotoStore()' id='buy' class='btn btn-primary' >Buy</a>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>";
    }
}
    
?>

        <?php
        include "Footer.php";
        ?>

<script src="Js_Files/jquery-3.3.1.min.js"></script>
<script src="Js_Files/bootstrap.min.js"></script>
<script type="text/javascript" src="Js_Files/script.js"></script>


</body>
</html>