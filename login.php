
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 , shrink-to-fit=no">
    <title>Login Page</title>
    <link rel = "stylesheet" type = "text/css" href="Css_Files/font-awesome.min.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href="Css_Files/style.css">
</head>
<body id ="login_page">
    <div class="loginBox">
        <img src="Images/Login_page/user.png" class="user_img" alt="User Image" title="User Logo">
        <h2 id="h2_login">Login Here</h2>
        <?php
        if (@$_GET['Empty'] == true)
        {
            ?>
            <div class="alert-light text-center py-3">
                <?php
                echo $_GET['Empty'];
                ?>
            </div>
            <?php
        }
        ?>

        <?php
        if (@$_GET['Invalid'] == true)
        {
            ?>
            <div class="alert-light text-center py-3">
                <?php
                echo $_GET['Invalid'];
                ?>
            </div>
            <?php
        }
        ?>

        <form action="login_process.php" method="post">
            <p>Username</p>
            <input type="text" class="login_input"name="name" placeholder="Enter your username">
            <p class="nameErr"></p>
            <p>Password</p>
            <input type="password" class="login_input" name="pass" placeholder="Enter your password">
            <p class="passErr"></p>
            <input type="submit" class="login_button" name="btn_login" value="Sign In">
        </form>
    </div>

    <script src="Js_Files/jquery-3.3.1.min.js"></script>
    <script src="Js_Files/bootstrap.min.js"></script>
    <script type="text/javascript" src="Js_Files/script.js"></script>
    </body>
</html>
