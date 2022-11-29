<?php

function pass_generator($max_length)
{
    $permitted_chars = [
        'numbers' => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,],
        'letters' => ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',],
        'symbols' => ['!', '?', '*', '#', '£', '$', '%']
    ];

    $random_password = '';

    if (isset($_GET['letters']) == 'on') {
        for ($i = 0; $i < $max_length; $i++) {
            $random_char = $permitted_chars['letters'][mt_rand(0, (count($permitted_chars['letters']) - 1))];

            $random_password .= $random_char;
        }
    }
    if (isset($_GET['numbers']) == 'on') {
        for ($i = 0; $i < $max_length; $i++) {
            $random_char = $permitted_chars['numbers'][mt_rand(0, (count($permitted_chars['numbers']) - 1))];

            $random_password .= $random_char;
        }
    }
    if (isset($_GET['symbols']) == 'on') {
        for ($i = 0; $i < $max_length; $i++) {
            $random_char = $permitted_chars['symbols'][mt_rand(0, (count($permitted_chars['symbols']) - 1))];

            $random_password .= $random_char;
        }
    }

    return $random_password;
}
