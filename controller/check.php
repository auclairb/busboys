<?php
if ( ! isset($_SESSION['LOGIN']) OR isset($_SESSION['ID']))
{

    echo 'Accès refusé ';
	header("Location: home.php");
	die();
}