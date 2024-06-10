<?php

function getCurrentDate($format = 'd-m-Y H:i:s', $originalDate)
{
    return date($format, strtotime($originalDate));
}

function get_full_date($date)
{

    $aylar = array(

        1 => "Ocak",

        2 => "Şubat",

        3 => "Mart",

        4 => "Nisan",

        5 => "Mayıs",

        6 => "Haziran",

        7 => "Temmuz",

        8 => "Ağustos",

        9 => "Eylül",

        10 => "Ekim",

        11 => "Kasım",

        12 => "Aralık"

    );

    $tmp_date = explode("-", $date);
    print_r($tmp_date);
    $newDate = $tmp_date[2] . " " . $aylar[$tmp_date[1]] . " " . $tmp_date[0];
    echo $newDate;

}

?>