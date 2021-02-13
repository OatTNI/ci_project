<?php

/*
* What: to prevent an sql injection attack
* Author: oat
* return: string
*/
function sql_prevention($input){
    $input=trim($input);
    $input=htmlspecialchars($input);
    $input=mysqli_escape_string($input);
    return $input;
}