<?php
if(!empty($_POST['user']) && !empty($_POST['text'])){
    $fp = fopen('../shoutbox_data.txt', "a");
    fputcsv($fp, [ date('Y-m-d H:i:s'), $_POST['user'], $_POST['text'] ]);
    fclose($fp);
}
?>
<h1>PHP Shoutbox</h1>
<div class="shoutbox-text">
    <ul>
        <?php
        $fp = fopen('../shoutbox_data.txt', 'r');
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
