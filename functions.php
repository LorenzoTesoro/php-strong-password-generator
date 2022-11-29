<?php
/* Milestone 3 (BONUS)
3-Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. */

//var_dump($_GET['repetition']);

function pass_generator($max_length)
{
    if ($max_length == null) {
        echo 'Non hai inserito la lunghezza della password!';
    }

    $permitted_chars = [
        'numbers' => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9,],
        'letters' => ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',],
        'simbols' => ['!', '?', '*', '#', '£', '$', '%']
    ];

    $random_password = '';

    if ($_GET['letters'] == 'letters') { // filter by letters
        for ($i = 0; $i < $max_length; $i++) {
            $random_char = $permitted_chars['letters'][mt_rand(0, (count($permitted_chars['letters']) - 1))];

            $random_password .= $random_char;
        }
    }
    if ($_GET['numbers'] == 'numbers') { // filter by numbers
        for ($i = 0; $i < $max_length; $i++) {
            $random_char = $permitted_chars['numbers'][mt_rand(0, (count($permitted_chars['numbers']) - 1))];

            $random_password .= $random_char;
        }
    }
    if ($_GET['simbols'] == 'simbols') { // filter by smbols
        for ($i = 0; $i < $max_length; $i++) {
            $random_char = $permitted_chars['simbols'][mt_rand(0, (count($permitted_chars['simbols']) - 1))];

            $random_password .= $random_char;
        }
    }

    $shuffled = str_shuffle($random_password);

    if ($_GET['repetition'] == '1') {
        return mb_strimwidth($shuffled, 0, $max_length);
    } elseif ($_GET['repetition'] == '2') {
        return mb_strimwidth(count_chars($shuffled, 3), 0, $max_length);
    }
}
