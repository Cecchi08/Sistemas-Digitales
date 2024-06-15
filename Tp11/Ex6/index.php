<?php
if ($_POST['password1'] == $_POST['password2']) {
    echo "Las claves ingresadas son correctas" . "<br>";
} else {
    echo "Las claes ingresadas som distintas" . "<br>";
}
?>