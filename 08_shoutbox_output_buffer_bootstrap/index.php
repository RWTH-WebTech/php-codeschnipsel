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
<div class="container">
    <nav class="navbar navbar-default"><?php include('navigation.php'); ?></nav>
    <main>
        <main><?= $textContent ?></main>
    </main>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</div>
</body>
</html>