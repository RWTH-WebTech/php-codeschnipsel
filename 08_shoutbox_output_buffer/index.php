<?php
$page = 'start';
if(!empty($_GET['page'])){
    $page = $_GET['page'];
}

$additionalHead = '';
$pageTitle = '';
ob_start();
include('main.php');
$textContent = ob_get_clean();

?>
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php'); ?>
</head>
<body>
    <nav><?php include('navigation.php'); ?></nav>
    <main><?= $textContent ?></main>
    <footer><?php include('footer.php'); ?></footer>
</body>
</html>