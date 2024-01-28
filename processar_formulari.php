<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinatari = "vmartinez2@inscaparrella.cat";
    $subject = "Missatge de Contacte";

    $missatge = $_POST["missatge"];
    $headers = "From: " . $_POST["email"];

    mail($destinatari, $subject, $missatge, $headers);
}
?>
