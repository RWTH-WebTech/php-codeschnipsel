<?php

const SHOUT_DATEFILE = '../shoutbox_data.txt';
const SHOUT_DATEFORMAT = 'Y-m-d H:i:s';

function add_shout($name, $text){
    $escName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $escText = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $fp = fopen(SHOUT_DATAFILE, "a");
    if(!$fp){
        return false;
    }
    fputcsv($fp, [ date(SHOUT_DATEFORMAT), $escName, $escText ]);
    fclose($fp);
    return true;
}

function get_shouts(){
    $data = [];
    $fp = fopen(SHOUT_DATAFILE, 'r');
    while(($csv = fgetcsv($fp)) !== false){
        $data[] = [
            'date' => DateTime::createFromFormat(SHOUT_DATEFORMAT, $csv[0]),
            'name' => $csv[1],
            'text' => $csv[2]
        ];
    }
    fclose($fp);
    return $data;
}