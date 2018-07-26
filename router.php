<?php

require_once("Models/reservation.php");
require_once("Models/passenger.php");

session_start();

if (!empty($_POST["cancel"]) && $_POST["cancel"] == true)
{
	session_destroy();
	include_once("Views/cancel.php");
}
else 
{
	if (empty($_SESSION['reservation']))
	{
		require_once("Controllers/newReservation.php");
	}

	else
	{
		require_once("Controllers/newPassenger.php");
	}
} 

?>