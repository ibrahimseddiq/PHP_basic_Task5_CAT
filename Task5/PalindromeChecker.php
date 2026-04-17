<?php
function palindrome_checker($word) {
    $word = strtolower($word); // For El Insensetivity..
    return $word === strrev($word) ? "$word is a Palindrome" : "$word is not a Palindrome";
    // Other Solution..
    /*
        for($i = 0; $i < strlen($word); $i++) {
            if($i >= (strlen($word) - ($i+1)))
                break;
            elseif($word[$i] != ($word[strlen($word) - ($i+1)]))
                return "$word is not a Palindrome";
        }
        return "$word is a Palindrome";
    */
}

