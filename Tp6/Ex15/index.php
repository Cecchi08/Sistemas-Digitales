<html>
<head>
<title></title>
</head>
<body>
<h1>Break en la ventana del navegador con signo \ </h1>
<p>
<?php
$a = 5; $b = 3; $c = -12;
$verdadero = "verdadero";
$falso = "falso";
if ($a > 3) {
    echo $verdadero;
    echo "<br>";
}


if ($a > $c) {
    echo $verdadero ;
    echo "<br>";
} else {
    echo $falso ;
    echo "<br>";
}


if ($b > $c) {
    echo $verdadero;
    echo "<br>";
}
if ($b != $c) {
    echo $verdadero;
    echo "<br>";
}


if ($a == 3) {
    echo $verdadero;
    echo "<br>";
} else {
    echo $falso;
    echo "<br>";
}


if ($a * $b == 15) {
    echo $verdadero;
    echo "<br>";
}


if ($a * $b == -30) {
    echo $verdadero;
    echo "<br>";
} else {
    echo $falso;
    echo "<br>";
}
if ($c / $b > $a) {
    echo $verdadero;
    echo "<br>";
}


if ($c / $b == -10) {
    echo $verdadero;
    echo "<br>";
} else {
    echo $falso;
    echo "<br>";
}
if ($c / $b == -4) {
    echo $verdadero;
    echo "<br>";
}


if ($a + $b + $c == 5) {
    echo $verdadero;
    echo "<br>";
} else {
    echo $falso;
    echo "<br>";
}
 
if ($a + $b == 8 && $a - $b == 2) {
    echo $verdadero;
    echo "<br>";
}


if ($a + $b == 8 || $a - $b == 6) {
    echo $verdadero;
    echo "<br>";
}


if ($a > 3 && $b > 3 && $c < 3) {
    echo $verdadero;
    echo "<br>";
}


if ($a > 3 && $b >= 3 && $c < -3) {
    echo $verdadero;
    echo "<br>";
}


?>
</p>
</body>
</html>
