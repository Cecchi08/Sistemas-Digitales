<?php
if (isset($_POST['name'])) {
    echo "Su nombre es: " . $_POST['name'] . "<br>";
} if (isset($_POST['last_name'])) {
    echo "Su apellido es: " . $_POST['last_name'] . "<br>";
} if (isset($_POST['age'])) { 
    echo "Su edad es: " . $_POST['age'] . "<br>"; 
} if (isset($_POST['DNI'])) {
    echo "Su DNI es: " . $_POST['DNI'] . "<br>";
} if (isset($_POST['Birthday'])) {
    echo "Su fecha de naciminento es: " . $_POST['Birthday'] . "<br>";
} if (isset($_POST['genere'])) {
    echo "Su genero es: " . $_POST['genere'] . "<br>";
} if (isset($_POST['placeOfBirth'])) {
    echo "Su lugar de nacimiento es: " . $_POST['placeOfBirth'] . "<br>";
} if (isset($_POST['address'])) {
    echo "Su direccion es: " . $_POST['address'] . "<br>";
} if (isset($_POST['hobbies'])) {
    echo "Sus hobbies es: " . $_POST['hobbies'] . "<br>";
}
?>