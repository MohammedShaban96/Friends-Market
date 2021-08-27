<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">

    <title>Friends Market</title>
    <link rel = "stylesheet" type = "text/css" href="Css_Files/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/style.css">
    <script src="JS/jquery-3.4.1.min.js"></script>
</head>

<body id="simple_page">

<?php
include "Main_Header.php";
?>
<!--

-->


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

<!-- Begin Content -->
<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "friends_market";

$con = new mysqli($host,$user,$pass,$db_name);
$result = $con->query
("SELECT img , price , describtion, item_date FROM items WHERE subcatg='Coats&Jackets';")
or die($con->error);
$resultCheck = mysqli_num_rows($result);
?><?php
if ($resultCheck >0 ){

    while ($product = $result->fetch_assoc()){
        echo"<div class='container-fluid'> 
                <div class='pro'>
                    <div class='container4'>
                        <div id='card-design' class='card'>
                            <img src=".$product['img'] . " class=\"card-img-top\" style='padding: 10px;'>
                            <div class='card-body'>
                                <h5 class=\"card-title\">" .$product['describtion']."</h5>
                                <p class=\"card-text\">".$product['price']."</p>
                                <a href='#' id='buy' class='btn btn-primary' >Buy</a>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>";
    }
}
?>


<div class="container-fluid">
    <div class="pro">
        <div class="container4">
            <div class="card">
                <img src="Images/jackets/Cashmere_Jacket.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Cashmere Jacket</h5>
                    <p class="card-text">Short, slim-fit jacket with turn-down collar
                        and zipper closure.
                    </p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>

            <div class="card">
                <img src="Images/jackets/Ivano%20Jacket.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ivano Jacket</h5>
                    <p class="card-text">Regular-fit faux leather jacket with zipper closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>

            <div class="card">
                <img src="Images/jackets/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Autumn Jacket</h5>
                    <p class="card-text">Short fleece jacket with Mandarin collar and button-down closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
            <div class="card">
                <img src="Images/jackets/8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Autumn Jacket</h5>
                    <p class="card-text">Short, slim-fit hooded fleece jacket with turn-down collar and zipper closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
            <div class="card">
                <img src="Images/jackets/8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Autumn Jacket</h5>
                    <p class="card-text">Short, slim-fit hooded fleece jacket with turn-down collar and zipper closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
</div>

        <div class="cleardiv"></div>
    </div>
</div>
<!--


<div class="container-fluid">
    <div class="pro">
        <div class="container4">
            <div class="card">
                <img src="Images/jackets/6.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Cashmere Jacket</h5>
                    <p class="card-text">Short, slim-fit jacket with turn-down collar
                        and zipper closure.
                    </p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>

            <div class="card">
                <img src="Images/jackets/Ivano%20Jacket.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ivano Jacket</h5>
                    <p class="card-text">Regular-fit faux leather jacket with zipper closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>

            <div class="card">
                <img src="Images/jackets/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Autumn Jacket</h5>
                    <p class="card-text">Short fleece jacket with Mandarin collar and button-down closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
            <div class="card">
                <img src="Images/jackets/8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Autumn Jacket</h5>
                    <p class="card-text">Short, slim-fit hooded fleece jacket with turn-down collar and zipper closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
            <div class="card">
                <img src="Images/jackets/8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Autumn Jacket</h5>
                    <p class="card-text">Short, slim-fit hooded fleece jacket with turn-down collar and zipper closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
        </div>

        <div class="cleardiv"></div>
        <div class="container3">
            <div class="card">
                <img src="Images/jackets/9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Baseball Jacket</h5>
                    <p class="card-text">Short slim-fit jacket with zipper closure. Has two oblique side pockets.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
            <div class="card">
                <img src="Images/jackets/8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Casual Autumn Jacket</h5>
                    <p class="card-text">Short, slim-fit hooded fleece jacket with turn-down collar and zipper closure.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
            <div class="card">
                <img src="Images/jackets/10.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Owen Jacket</h5>
                    <p class="card-text">Long sleeved motorcycle jacket crafted from high quality vegan faux leather. </p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
        </div>
        <div class="cleardiv"></div>
        <div class="container3">
            <div class="card">
                <img src="Images/jackets/11.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jenson Denim Jacket </h5>
                    <p class="card-text">A regular fit denim jacket with metallic button front, turn-down collar.</p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
            <div class="card">
                <img src="Images/jackets/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Military Jacket</h5>
                    <p class="card-text">Short, thin windbreaker jacket with zipper closure. Hooded, with a drawcord. </p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
            <div class="card">
                <img src="Images/jackets/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Gentleman Jacket</h5>
                    <p class="card-text">Short, thin windbreaker jacket with standing collar and zipper closure. </p>
                    <a href="#" id = "buy">Buy</a>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<?php
include "Footer.php";
?>

<script src="Js_Files/jquery-3.3.1.min.js"></script>
<script src="Js_Files/bootstrap.min.js"></script>
<script type="text/javascript" src="Js_Files/script.js"></script>

</body>
</html>