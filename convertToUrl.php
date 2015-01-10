<?php
function convertToUrl($string) {

    #$string = str_replace($tofind, $replace, $string);
    $string = mb_strtolower($string);
    $string = str_replace(
        array(
            'à', 'â', 'ä', 'á', 'ã', 'å',
            'î', 'ï', 'ì', 'í',
            'ô', 'ö', 'ò', 'ó', 'õ', 'ø',
            'ù', 'û', 'ü', 'ú',
            'é', 'è', 'ê', 'ë',
            'ç', 'ÿ', 'ñ',
        ),
        array(
            'a', 'a', 'a', 'a', 'a', 'a',
            'i', 'i', 'i', 'i',
            'o', 'o', 'o', 'o', 'o', 'o',
            'u', 'u', 'u', 'u',
            'e', 'e', 'e', 'e',
            'c', 'y', 'n',
        ),
        $string);

    $string = str_replace(' ', '~', $string);
    $string = filter_var($string, FILTER_SANITIZE_EMAIL);
    $forbidden = array('!', '#', '$', '%', '&', '*', '+', '-', '/', '=', '?', '^', '_', '`', '{', '|', '}', '~', '@', '.', '[', ']', '\'', ' ');
    $string = str_replace($forbidden, '-', $string);

    $string = preg_replace('#-+#', '-', $string);

    return trim($string, '-');
}