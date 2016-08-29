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
