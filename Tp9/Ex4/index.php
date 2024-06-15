<?php
$name = $_POST['name'];
if ($_POST['debt'] == "debt1") {
    echo "Usted, " . $name . " no debe pagar un recargo <br>";
} else if ($_POST['debt'] == "debt2") {
    echo "Usted, " . $name . " no debe pagar un recargo <br>";
} else if ($_POST['debt'] == "debt3") {
    echo "Usted, " . $name . " debe pagar un recargo, por superar su deuda de mas de $10.000 <br>";
}
?>