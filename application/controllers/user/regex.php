<?php

/*
* What: regex for check phone pattern for login and validation form
* Author: oat
* return: string of regex
*/
function regex_phone(){
    $pattern="/^0{1}[689]{1}\d{8}$/";
    return $pattern;
}

/*
* What: regex for check password on validation form
* Author: oat
* return: string of regex
*/
function regex_password(){
    $pattern="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$*&^%])[a-zA-Z\d!@#$*&^%]{8,}$/";
    return $pattern;
}