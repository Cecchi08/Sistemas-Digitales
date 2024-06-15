<?php
$ar = fopen("pedidos.txt", "r") or
die("No se pudo abrir el archivo");
while (!feof($ar)) {
$line = fgets($ar);
$leapline = nl2br($line);
echo $leapline;
}
fclose($ar);
?>