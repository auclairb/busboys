<?php
session_start();
session_unset();
session_destroy();
echo "Vous êtes déconnectés !";

header("location:eleve.php");
die();

?>