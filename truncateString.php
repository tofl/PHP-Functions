<?php

function truncateString($string, $n) {
    $n = (int)$n;

    if (!is_string($string) OR !isset($string) OR $n <= 0 OR !isset($n)) return false;
    if ($n >= strlen($string)) return $string;

    trim($string);

    $string = ' ' . $string . ' ';

    if ($string{$n} != ' ') {
        while ($string{$n} != ' ') {
            $n++;
        }
    }

    return trim(substr($string, 0, $n)) . '...';
}