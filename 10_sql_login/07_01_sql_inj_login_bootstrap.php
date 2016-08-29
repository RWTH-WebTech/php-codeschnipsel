<?php header('X-XSS-Protection: 0'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>SQL Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <main>
        <h1>Login</h1>
        <?php
        if(!empty($_POST['user'])){
            $db = new PDO('sqlite:database.sqlite3');
            $pw = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $users = $db->query('SELECT * FROM users WHERE password = "'.$pw.'" AND name = "'.$_POST['user'].'"');
            $user = $users->fetch();
            echo '<div class="alert alert-danger" role="alert">Login '.($user ? '' : 'nicht').' erfolgreich</div>';
        }
        ?>
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" name="user" class="form-control" placeholder="Benutzer">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="password" name="password" class="form-control" placeholder="Passwort">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <input type="submit" class="btn btn-success" value="Login">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <footer>
        WebTech Wintersemester 2016 - SQL Login
    </footer>
</div>
</body>
</html>