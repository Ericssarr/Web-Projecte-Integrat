<?php
$remitente = $_POST['email'];
$destinatari = 'ericssarr@hotmail.com'; // en esta línea va el mail del destinatario.
$asumpte = 'Consulta'; // aquí se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cos = "Nom i Cognom: " . $_POST["nom"] . "\r\n"; 
    $cos .= "Email: " . $_POST["email"] . "\r\n";
	$cos .= "Consulta: " . $_POST["consulta"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nom']." \" <".$remitente.">\n";

    mail($destinatari, $asumpte, $cos, $headers);
    
    include 'confirma.html'; //se debe crear un html que confirma el envío
}
?>
