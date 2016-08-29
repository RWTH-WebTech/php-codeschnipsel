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
            $sql = "SELECT * FROM users WHERE password = :password AND user = :user";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':user', $username);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $username = $_POST['user'];
            $stmt->execute();
            $user = $stmt->fetch();
            echo '<p>Login '.($user ? '' : 'nicht').' erfolgreich</p>';
        }
    ?>
    <form action="" method="post">
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