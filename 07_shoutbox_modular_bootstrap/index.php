<?php
$page = 'start';
if(!empty($_GET['page'])){
    $page = $_GET['page'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php'); ?>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default"><?php include('navigation.php'); ?></nav>
    <main>
        <?php include('content.php'); ?>
    </main>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</div>
</body>
</html>