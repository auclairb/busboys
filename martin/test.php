<!DOCTYPE html>
<html>
<body>
<?php
/*
session_start();
echo $_SESSION['NOM'];
echo "<br>";
echo $_SESSION['PRENOM'];
*/

include 'functions.php';
$bdd = connectToDB();
printEleves($bdd);
?>
</body></html>