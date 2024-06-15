<html>
<head>
<title></title>
</head>
<body>
<h1>Break en la ventana del navegador con signo \ </h1>
<p>
<?php
$num = rand(1, 100);
echo $num;
echo "<br>";
if ($num < 50) {
    echo "Es menor a 50 <br>";
} if ($num > 50) {
    echo "Es mayor a 50 <br>";
} if ($num == 50) {
    echo "Es igual a 50 <br>";
}
?>
</p>
</body>
</html>
