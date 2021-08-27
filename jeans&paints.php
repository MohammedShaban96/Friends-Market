
<?php
include "connection.php";
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Jeans Page</title>
        <link rel = "stylesheet" type = "text/css" href="Css_Files/bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href="Css_Files/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" href="Css_Files/style.css">

    </head>
    <body>
<?php
include "Main_Header.php";
?>

    <div class="title-div">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2>Feel Free to Shop</h2>
                    <p>Your Shopping Journey starts here.</p>
                </div>
            </div>
        </div>
    </div>
      
      <?php

$result = $con->query("SELECT img, price, describtion FROM items WHERE subcatg = 'jeans';")
or die($con->error);
$resultCheck = mysqli_num_rows($result);
?><?php
if ($resultCheck >0 ){

    while ($product = $result->fetch_assoc()){
        echo"<div class='container'> 
                <div class='pro'>
                    <div class='container3'>
                        <div id='card-design' class='card'>
                            <img src=".$product['img'] . " class='card-img-top' style='padding: 10px;'>
                            <div class='card-body'>
                                <h5 class='card-title'>" .$product['describtion']."</h5>
                                <p class='card-text'>".$product['price']."</p>
                                <a href='#' id='buy' class='btn btn-primary' >Buy</a>
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