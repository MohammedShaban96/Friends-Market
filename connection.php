<?php
    $con = mysqli_connect('localhost', 'root','','friends_market');
    if (!$con)
    {
        die('Please Check Your Connection'.mysqli_error($con));
    }
?>