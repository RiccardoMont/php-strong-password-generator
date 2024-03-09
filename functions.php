<?php

function pswGenerator($wishedLength)
{

    $randomString = '';

    while (strlen($randomString) < $wishedLength) {

        $randomString .= chr(rand(33, 126));
    }

    return $randomString;
}
