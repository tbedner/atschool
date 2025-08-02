<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
    <head>
        <title>At-School Online Portal</title>
        <link rel="shortcut icon" href="https://www.at-school-portal.com/moodle/theme/image.php/boost/theme/1725683684/favicon" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="At School | Home" />
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body class="text-center">
        <div id="heading">
            <h1 class="login-heading mb-4">Welcome to @School</h1>
        </div>
        <div id="login">
            <button class="btn btn-primary btn-lg" type="submit"><a href="https://www.at-school-portal.com/moodle/login/index.php">Login</a></button>
        </div>
        <div id="portal">
        <?php
            echo '<br><br>If you are already logged in, go to your portal here:<br><br>';
        ?>
            <button class="btn btn-success" type="submit"><a href="https://www.at-school-portal.com/moodle">Go to Portal</a></button>
        </div>
    </body>
</html>