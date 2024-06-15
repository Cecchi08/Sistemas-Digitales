<?php
    $name = $_REQUEST['name']; 
    $age = $_REQUEST['age'];
    $answer = "Es menor de edad";
    if ($age >= 18) {
        $answer = 'Es mayor de edad';
    }
    echo $answer;
?>