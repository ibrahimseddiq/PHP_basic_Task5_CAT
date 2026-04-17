<?php
function password_strength_checker($password) {
    $strength = 0;

    if(strlen($password) >= 8) //Check password length
        $strength++;
        if(preg_match("/[a-z]/",$password)) //Check for lowercase letters 
        $strength++;
    if(preg_match("/[A-Z]/",$password)) //Check for uppercase letters
        $strength++;
    if(preg_match("/[0-9]/",$password)) //Check for numbers
        $strength++;
    if(preg_match("/[!@#$%^&*()<>{},.:'|]/",$password)) //Check for special characters
        $strength++;

    //Return strength level: Weak / Medium / Strong
    if($strength <= 2)
        return "Password Strengh: Weak";
    elseif($strength > 2 && $strength <= 4)
        return "Password Strengh: Medium";
    else
        return "Password Strengh: Strong";
}

// Example..
$password = 'Pa$$word123';
echo password_strength_checker($password);