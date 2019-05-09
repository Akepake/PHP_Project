<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>

        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a>Päiväkoti Pikkusuutari</a></li>
                </ul>
                <div class="nav-login">
                    <?php
                    //header will show logout or login according to if session has been started
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="submit">Logout</button>
                    </form>';
                        } else {
                            echo '<form action= "includes/login2.inc.php" method="POST">
                        <input type="text" name="mailuid" placeholder="Username/email">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                    </form>';
                        }
                    ?>





                </div>
            </div>
        </nav>
    </header>
