<?php

session_start();


function pswGenerator($wishedLength){

    $_SESSION['randomPass'] = '';

    while (strlen($_SESSION['randomPass']) < $wishedLength) {

        $_SESSION['randomPass'] .= chr(rand(33, 126));
    }

}




