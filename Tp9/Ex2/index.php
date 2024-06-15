<?php
$name = $_REQUEST['name'];
$levelOfStuding = $_REQUEST['levelOfStuding'];
switch ($levelOfStuding) {
    case 1 : 
        echo "El nivel de estudios de " . $name . " es: Primario"; 
        "<br>";
        break;
    case 2 : 
        echo "El nivel de estudios de " . $name . " es: Secundario"; 
        "<br>";
        break;
    case 3 : 
        echo "El nivel de estudios de " . $name . " es: Terciario"; 
        "<br>";
        break;
    case 4 : 
        echo "El nivel de estudios de " . $name . " es: Universitario"; 
        "<br>";
        break;
    case 5 : 
        echo "El nivel de estudios de " . $name .  " es: Sin Estudios"; 
        "<br>";
        break;
} 
?>