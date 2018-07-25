<?php

require_once '../Models/reservation.php';
require_once '../Models/passenger.php';

$reservation = new Reservation(1, "Bruxelles", 3, false);
$reservation->addPassenger(0, "Basile", "Vanneste", 21);
$reservation->addPassenger(1, "Jean", "Vanneste", 23);

$reservation->printReservation();

echo($reservation->getTotalPrice());

/*
$passenger = new Passenger(0, "Jean", "Vanneste", 23, 1);

$passenger->printPassenger();
*/
?>