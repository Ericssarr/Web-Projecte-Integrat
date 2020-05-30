<?php

$nom = $_POST['nom'];

$mail = $_POST['email'];

$missatge = $_POST['missatge'];

$header = 'From: ' . $mail . " \r\n";

$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";

$header .= "Mime-Version: 1.0  \r\n";

$header .= "Content-Type: text/plain";

$missatge = "Este missatge fue enviado por" . $nom . " " . $missatge . " \r\n";

$missatge .= "Su e-mail es:" . $mail . "\r\n";

$missatge .= "Mensaje:" . $_POST['missatge'] . "\r\n";

$missatge .= "Enviado el" . date("d/m/Y", time());

$para = "erikcat06@gmail.com";

$titulo = "Mensaje del sitio Web Clover4";

mail($para, $titulo, utf8_decode($missatge), $header);

echo "Tus datos fueron enviados correctamente <b>".$_POST['nom']."</b>";

?>