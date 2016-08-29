<?php

$x = 'A';
$y = 5;

define('A', 5 + 1);
const A = 5 . ' ABC';
define($x, 5);
define('A', $y);
define($x, $y);

const A = $y;

if(!defined($x)){
    define($x, $y);
}
if(!defined('A')){
    const A = 5;
}

