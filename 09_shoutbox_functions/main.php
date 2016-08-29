<?php
switch($page) {
    case 'users' :
        include('content_users.php');
        break;
    case 'start' :
    default :
        include('content_shoutbox.php');
        break;
}