
<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us Page</title>
    <link rel = "stylesheet" type = "text/css" href="Css_Files/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/style.css">
</head>

<script type="text/javascript">
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtnShow");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

</script>
<body>
<?php
include "Main_Header.php";
?>

<!-- Begin Content -->
    <div class="about-section">
        <div class="inner-width">
            <h1>About Us</h1>
            <div class="border"></div>
            <div class="about-section-row">
                <div class="about-section-col">
                    <div class="about">
                        <div class="card-body">
                            <h1 class="card-title"> Web Team</h1>
                                <p class="card-text">
We are Students of Benha Faculty of Computers and Aritificial Intelligence.<br>
This Page is a small Project of E-commerce Online Shopping Specialized in <br>
Clothes and Accessories and Contains Diffrent Types of Clothes. We focus <br>
on PHP & MySQL PHPMyadmin (Back End or Server Side) <span id="dots">...</span><span id="more">by showing and representing<br>
data to Pages by getting Them from the DB and show them. The Admin can also <br>
delete, update,select and insert data and it will be saved. <br>
We want to reach more in The Field of Web Developement to Get more experience <br>
to Know how to use AI & Machine Learing in The Web Developement Field <br>
                            </span>
                                </p>
                            <button type="button" class="btn btn-primary" onclick="myFunction()" id="myBtnShow">Read more</button> <br>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



<!-- End Content -->

<?php
//include "Footer.php";
?>


    </body>
</html>