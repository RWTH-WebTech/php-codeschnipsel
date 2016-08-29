<?php header('X-XSS-Protection: 0'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>XSS Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Login</h1>
    <?php
        if(!empty($_GET['user'])){
            echo '<p>Falscher Benutzername "'.$_GET['user'].'"</p>';
        }
    ?>
    <form action="" method="get">
        <input type="text" name="user" placeholder="Benutzer" value="<?= $_GET['user'] ?>">
        <input type="password" name="password" placeholder="Passwort">
        <input type="submit" value="Login">
    </form>
</main>
<footer>
    WebTech Wintersemester 2016 - XSS Login
</footer>
</body>
</html>