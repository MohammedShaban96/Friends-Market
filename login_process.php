<?php

require_once ('connection.php');
session_start();
if (isset($_POST['btn_login']))
{
    if (empty($_POST['name']) || empty($_POST['pass']))
    {
        header("location:login.php?Empty= Please Fill in the Blanks");
    }
    else{
        $query = "select * from admin_details where 
        username ='".$_POST['name']."' 
        and password = '".$_POST['pass']."'";
        $result = mysqli_query($con,$query);
        if (mysqli_fetch_assoc($result))
        {
            $_SESSION['User'] = $_POST['name'];
            header("location:Admin_Support.php");
        }
        else{
            header("location:login.php?Invalid= Please Enter Correct User Name and Password");
        }
    }
}
else{

}

$con->close();
?>