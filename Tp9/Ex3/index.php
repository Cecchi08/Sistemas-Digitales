<?php
$cantOfSports = 0;
if (isset ($_POST['Check1'])) {
    $cantOfSports++;
}  if (isset ($_POST['Check2'])) {
    $cantOfSports++;
}  if (isset ($_POST['Check3'])) {
    $cantOfSports++;
} if (isset ($_POST['Check4'])) {
    $cantOfSports++;
} if (isset ($_POST['Check5'])) {
    $cantOfSports++;
}

$name = $_POST['name'];
echo $name . " practica " . $cantOfSports . " deportes <br>";
?>