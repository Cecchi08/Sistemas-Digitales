<?php
$ar = fopen("comprobante.txt", "a");
fputs($ar, "El alumno ");
fputs($ar, $_POST['lastName']);
fputs($ar, " ");
fputs($ar, $_POST['name']);
fputs($ar, "\n");
fputs($ar, "Con DNI ");
fputs($ar, $_POST['DNI']);
fputs($ar, "\n");
fputs($ar, "cuya fecha de nacimiento es ");
fputs($ar, $_POST['birthDay']);
fputs($ar, "\n");
fputs($ar, "Su curso actual es ");
fputs($ar, $_POST['class']);
fputs($ar, "\n");
fputs($ar, "Sus materias adeudadas son ");
fputs($ar, $_POST['subjectsOwed']);
fputs($ar, "\n");
fputs($ar, "la materia en la que se inscribe es ");
fputs($ar, $_POST['subjet']);
fputs($ar, "\n");
fputs($ar, "En el dia de ");
fputs($ar, $_POST['day']);
fputs($ar, "\n");
fclose($ar);
?>