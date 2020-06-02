<?php
$nom = $_POST['nom'];
$mail = $_POST['email'];
$empresa = $_POST['missatge'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$missatge = "Aquest missatge ha estat enviat per " . $nom . ",\r\n";
$missatge .= "El seu correu es: " . $mail . " \r\n";
$missatge .= "Missatge: " . $_POST['missatge'] . " \r\n";
$missatge .= "Enviat el " . date('d/m/Y', time());

$per = 'albertvilardell@grlesalzines.org';
$asumpte = 'Missatge GR LES ALZINES';

mail($per, $asumpte, utf8_decode($missatge), $header);

header("Location: ../contacte2.html");
?>