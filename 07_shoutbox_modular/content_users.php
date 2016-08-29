<h1>PHP Shoutbox Users</h1>
<?php
    $users = [];
    $fp = fopen('../shoutbox_data.txt', 'r');
    while(($csv = fgetcsv($fp)) !== false){
        $users[$csv[1]] = $csv;
    }
    fclose($fp);
    ksort($users, SORT_STRING | SORT_FLAG_CASE);
?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Letzter Shout am</th>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach($users as $name => $csv){
            echo '<tr><td>'.$csv[1].'</td><td>'.$csv[0].'</td></tr>';
        }
    ?>
    </tbody>
</table>