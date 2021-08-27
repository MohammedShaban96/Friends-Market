<?php

session_start();
require_once ("CreateDb.php");
require_once ("component.php");
$database = new CreateDb("friends_market","items");

if (isset($_POST['add_to_cart']))
{


}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">

        <title>Store</title>
        <link rel = "stylesheet" type = "text/css" href="Css_Files/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" href="Css_Files/bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href="Css_Files/style.css">
    </head>
    <body id="Store_page">
    <?php
    include "Main_Header.php";
    ?>
    <div class='container-fluid'>
        <div class='pro'>
             <div id ='div-design' class='container3'>
                 <?php
                    $result = $database->getData();
                    while ($row = mysqli_fetch_assoc($result))
                    {
                        component($row[''])
                    }
                 ?>
             </div>
        </div>
    </div>






    <?php
    include "Footer.php";
    ?>

    <script src="Js_Files/jquery-3.3.1.min.js"></script>
    <script src="Js_Files/bootstrap.min.js"></script>
    <script type="text/javascript" src="Js_Files/script.js"></script>
    </body>
</html>