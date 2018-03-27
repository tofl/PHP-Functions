<?php

function generateString($length = 30) {
    if (!is_int($length)) return false;

    $char =
        array(
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
            'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
            's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1,
            2, 3, 4, 5, 6, 7, 8, 9);

    $string = '';

    for ($i = 1; $i <= 50; $i++) {
        $string .= $char[mt_rand(0, count($char) - 1)];
    }

    $nbrCrypts = ceil($length/40);
    sha1($string);

    for ($i = 1; $i <= $nbrCrypts - 1; $i++) {
        $string .= sha1($string);
    }

    return substr($string, 0, $length);
}
