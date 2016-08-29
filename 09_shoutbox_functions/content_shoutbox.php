<?php
if(!empty($_POST['user']) && !empty($_POST['text'])){
    add_shout($_POST['user'], $_POST['text']);
}
?>
<h1>PHP Shoutbox</h1>
<div class="shoutbox-text">
    <ul>
        <?php foreach(get_shouts() as $shout){ ?>
            <li><?= $shout['name'] ?>: <?= $shout['text'] ?></li>
        <?php } ?>
    </ul>
</div>
<h2>Schreib was!</h2>
<div class="shoutbox-form">
    <form action="" method="post">
        <input type="text" name="user" placeholder="Benutzer">
        <input type="text" name="text" placeholder="Text">
        <input type="submit" value="Shout!">
    </form>
</div>
