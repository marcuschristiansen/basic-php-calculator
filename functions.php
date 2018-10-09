<?php 

function is_validated($numbers = array()) {
    $error_messages = [];
    foreach ($numbers as $key => $number) {
        if(!is_numeric($number) || empty($number)) {
            $error_messages[] = 'Number ' . ($key + 1) . ' must be a number and cannot be empty';
        } 
    }

    return $error_messages;
}


function calculate($numbers = array()) {

    $total = 0;
    foreach ($numbers as $key => $number) {
        $total = $total + $number;
    }
    
    return $total;

    // if($operator == 'subtract') {
    //     return $num1 - $num2 - $num3;
    // } elseif ($operator == 'add') {
    //     return $num1 + $num2 + $num3;
    // } elseif ($operator == 'divide') {
    //     return $num1 / $num2 / $num3;
    // } elseif ($operator == 'multiply') {
    //     return $num1 * $num2 * $num3;
    // } 
    // return;
} 



?>