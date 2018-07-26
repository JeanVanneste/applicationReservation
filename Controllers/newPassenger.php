<?php

echo("Nouveau passager <br />");

$_SESSION['reservation']->printReservation();

require_once("Views/passenger.php");

?>