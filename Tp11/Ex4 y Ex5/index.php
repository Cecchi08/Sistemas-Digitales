<?php
$ar = fopen("pedidos.txt", "a") or die("Problemas en la creacion del pedido");
fputs($ar, "La persona con el nombre de: ");
fputs($ar, $_POST['name']);
fputs($ar, "\n");
fputs($ar, "Con su direccion en: ");
fputs($ar, $_POST['adress']);
fputs($ar, "\n");
if (isset($_POST['two'])) {
    fputs($ar, "Encago una pizza con jamon y queso");
    fputs($ar, "\n");
}   else if ($_POST['another'] == "Jamon"){
    fputs($ar, "Encago una pizza con jamon");
    fputs($ar, "\n");
}  else if ($_POST['another'] == "queso") {
    fputs($ar, "Encago una pizza con queso");
    fputs($ar, "\n");
}
if (isset($_POST['napo'])) {
    fputs($ar, "Con napolitana");
    fputs($ar, "\n");
}
if (isset($_POST['muzza'])) {
    fputs($ar, "Con muzzarella");
    fputs($ar, "\n");
}
fputs($ar, "................................................................");
fclose($ar);
echo "Su pedido ya fue registrado";
?>