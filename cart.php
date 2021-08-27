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
<body id="store_page">
<?php
include "Main_Header.php";
?>
<div class="container" >
    <?php
    include "connection.php";
    $query = "SELECT * FROM items ORDER BY item_id ASC";
    $result = mysqli_query($con,$query);

    if ($result):
        if (mysqli_num_rows($result) >0):
            while ($product  = mysqli_fetch_assoc($result)):
                ?>
                <div class="col-sm-4 col-md-3">
                    <form method="post" action="Store.php?action=add&id="<?php echo $product['id'];?>">
                        <div class="products">
                            <img src="<?php echo $product['img'];?> class='img-responsive'">
                            <h4 class="text-info"><?php echo $product['name']; ?></h4>
                            <h4><?php echo $product['price']; ?></h4>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="name" value="<?php echo $product['name']; ?>">
                            <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                            <input type="submit" name="add_to_cart" class="btn btn-info"
                             value="Add to Cart">
                        </div>
                    </form>
                </div>


            <?php
            endwhile;
        endif;

    endif;

    ?>
    <!--
     <div class='container-fluid'>
                            <div class='pro'>
                                <div class='container3'>
                                    <div id='card-design' class='card'>
                                        <img src=".$product['img'] ." class='card-img-top' style='padding: 10px;'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>" .$product['describtion']."</h5>
                                            <p class='card-text'>".$product['price']."</p>
                                            <a href='#'  id='buy' class='btn btn-primary' >Buy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



    -->
</div>
<?php
include "Footer.php";
?>

<script src="Js_Files/jquery-3.3.1.min.js"></script>
<script src="Js_Files/bootstrap.min.js"></script>
<script type="text/javascript" src="Js_Files/script.js"></script>


</body>
</html>