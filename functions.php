<?php

function pass_generator($max_length)
{
    $permitted_chars = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '!', '?', '*', '#', '£', '$', '%'];

    $random_password = '';

    for ($i = 0; $i < $max_length; $i++) {
        $random_char = $permitted_chars[mt_rand(0, (count($permitted_chars) - 1))];

        $random_password .= $random_char;
    }

    return $random_password;
}
