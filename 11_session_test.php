<?php
session_start();

var_dump($_SESSION);

if(empty($_SESSION['test']))
		$_SESSION['test'] = mt_rand(0,100);

var_dump($_SESSION);
var_dump(session_id());
var_dump(session_name());
var_dump(sys_get_temp_dir());
