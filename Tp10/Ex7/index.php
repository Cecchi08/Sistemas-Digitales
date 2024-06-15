<?php
$password = array(
    'name1' => $_POST['password1'],
    'name2' => $_POST['password2'],
    'name3' => $_POST['password3'],
    'name4' => $_POST['password4'],
    'name5' => $_POST['password5']
    );
    echo $password['name1'] . " " . $password['name2'] . " " . $password['name3'] . " " . $password['name4'] . " " . $password['name5'] . " ";
?>
