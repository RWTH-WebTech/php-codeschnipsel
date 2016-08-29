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
    <nav><?php include('navigation.php'); ?></nav>
    <main><?php include('main.php'); ?></main>
    <footer><?php include('footer.php'); ?></footer>
</body>
</html>