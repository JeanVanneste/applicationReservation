<?php 

$destination=$_GET["destination"];
$seatTotal=$_GET["seatTotal"];
$id = 1;

if ($_GET["insurance"] == on)
{
	$insurance = "true";
}
else
{
	$insurance = "false";
}

try 
{
	$conn = new PDO('pgsql:host=server;dbname=reservation', 'jean', 'mcsuaptesbuf');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "INSERT INTO reservation(destination, seatTotal, insurance) VALUES ('$destination', $seatTotal, $insurance);";
	$conn->exec($sql);
	echo "Réservation enregistrée";
}
catch (PDOException $e)
{
	die('Erreur : ' . $e->getmessage());
}

$id = null;

$conn = null;

?>