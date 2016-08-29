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
    <form action="" method="post">
        <input type="text" name="user" placeholder="Benutzer">
        <input type="text" name="text" placeholder="Text">
        <input type="submit" value="Shout!">
    </form>
</div>
