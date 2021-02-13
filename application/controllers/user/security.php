<?php
/*
* What: to prevent an sql injection attack
* Author: oat
* return: string
*/
function sql_prevention($input){
    $link = mysqli_connect("localhost", "root", "", "SC_FS");
    $input=trim($input);
    $input=htmlspecialchars($input);
    $input=mysqli_escape_string($link,$input);
    return $input;
}

