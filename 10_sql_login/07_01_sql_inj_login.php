<?php header('X-XSS-Protection: 0'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>SQL Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Login</h1>
    <?php
        if(!empty($_POST['user'])){
            $db = new PDO('sqlite:database.sqlite3');
            $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $userCount = $db->exec('SELECT * FROM usersWHERE password = "'.$pw.'" AND user = "'.$_POST['user'].'"');
            echo '<p>Login '.($userCount == 0 ? 'nicht' : '').' erfolgreich</p>';
        }
    ?>
    <form action="" method="get">
        <input type="text" name="user" placeholder="Benutzer" value="<?= $_POST['user'] ?>">
        <input type="password" name="password" placeholder="Passwort">
        <input type="submit" value="Login">
    </form>
</main>
<footer>
    WebTech Wintersemester 2016 - SQL Login
</footer>
</body>
</html>