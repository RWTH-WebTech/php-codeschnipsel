<?php
if(!empty($_POST['user']) && !empty($_POST['text'])){
    $fp = fopen('shoutbox_data.txt', "a");
    fputcsv($fp, [
        date('Y-m-d H:i:s'),
        htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($_POST['text'], ENT_QUOTES, 'UTF-8')
    ]);
    fclose($fp);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Shoutbox</title>
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
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Shoutbox</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Start</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <main>
        <h1>PHP Shoutbox</h1>
        <div class="shoutbox-text">
            <ul>
                <?php
                $fp = fopen('shoutbox_data.txt', 'r');
                while(($csv = fgetcsv($fp)) !== false){
                    echo '<li>'.$csv[1].': '.$csv[2].'</li>';
                }
                fclose($fp);
                ?>
            </ul>
        </div>
        <h2>Schreib was!</h2>
        <div class="shoutbox-form">
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" name="user" class="form-control" placeholder="Benutzer">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" name="text" class="form-control" placeholder="Text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="btn-group btn-group-justified">
                            <div class="btn-group">
                                <input type="submit" class="btn btn-success" value="Shout!">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
        WebTech Wintersemester 2016 - PHP Shoutbox
    </footer>
</div>
</body>
</html>