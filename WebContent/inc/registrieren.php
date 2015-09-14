<?php session_start();
if (!empty($_POST['anmeldename']) AND !empty($_POST['pwd']))
{
	
//DB Verbindung
require_once 'settings.php';
	
//Felder übergeben
$Login = $_POST['anmeldename'];
$Password = $_POST['pwd'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$email	= $_POST['e-mail'];

//Abfrage in der DB
$Ergebnis = mysql_query("SELECT * FROM `user` WHERE `e-mail` LIKE '$email' ");
$Menge = mysql_num_rows($Ergebnis);
if ($Menge < 0){
$Query = mysql_query("INSERT INTO `webproggen`.`user` (`anmeldename`,'e-mail', `vorname`, `nachname`, `passwort`) VALUES ('$Login','$email', '$vorname', '$nachname', '$Password');");

echo "Registrierung erfolgreich!";}
else{
	echo "Registrierung fehlgeschlagen!";
	
}


//Link Weiterleitung
$cat = $_POST['cat'];
$activemenu = $_POST['activemenu'];

if(isset($_POST['cat']) AND isset($_POST['activemenu'])){	header('Location: ../start.php?cat='.$cat.'&activemenu='.$activemenu.'');}
else{														header('Location: ../start.php');}  

exit();
}
else
{
    echo "Login fehlgeschlagen!";
}
?>
