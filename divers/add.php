<?php 

print("<h1>Test ok!</h1>");
try
{
	$conn = new PDO('pgsql:host=server;dbname=reservation', 'jean', 'mcsuaptesbuf');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getmessage());
}

if ($conn)
{
	try
	{
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO reservation (id, destination, seatTotal, insurance) VALUES (1, 'Bruxelles', 1, 'true')";
		$conn->exec($sql);
		echo "New record created successfully";
	}
	catch (PDOException $e)
	{
		die('Erreur : ' . $e->getmessage());
	}
	
	$conn = null;
}

?>