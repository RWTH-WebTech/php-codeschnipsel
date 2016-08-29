<?php $pageTitle = 'Benutzer'; ?>
<h1>PHP Shoutbox Users</h1>
<?php
    $users = [];
    foreach(get_shouts() as $shout) {
        $users[$shout['name']] = $shout;
    }
    ksort($users, SORT_STRING | SORT_FLAG_CASE);
?>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Letzter Shout am</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($users as $name => $shout){
            echo '<tr><td>'.$shout['name'].'</td><td>'.$shout['date']->format('Y-m-d H:i').'</td></tr>';
        }
    ?>
    </tbody>
</table>