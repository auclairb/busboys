<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$retour = mail("martin.chochod@live.fr","My subject",$msg);

if(!$retour)
	echo "Echec ... :(";
else
	echo "Succès vous avez reçu un email !";
?> 
