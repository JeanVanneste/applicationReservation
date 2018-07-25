<?php

require_once 'passenger.php';

class Reservation {

    public $destination;
    public $seatTotal;
    public $insurance;
    public $passengers;
    public $id = 1;

    function __construct($lastID, $destination, $seatTotal, $insurance)
    {
        $this->id = $lastID + 1;
        $this->destination = $destination;
        $this->seatTotal = $seatTotal;
        $this->insurance = $insurance;

        $this->passengers = array();
    }

    function getTotalPrice()
    {
        //Add passenger price + insurance if taken
    }

    function addPassenger($lastId, $firstname, $lastname, $age)
    {
        $passenger = new Passenger($lastId, $firstname, $lastname, $age, $this->id);
        array_push($this->passengers, $passenger);
    }

    function printReservation()
    {
        printf("%d, %s, %d <br />", $this->id, $this->destination, $this->seatTotal);
        foreach ($this->passengers as $passenger) 
        {
            $passenger->printPassenger();
        }
    }
}


$reservation = new Reservation(1, "Bruxelles", 3, false);
$reservation->addPassenger(0, "Basile", "Vanneste", 21);
$reservation->addPassenger(1, "Jean", "Vanneste", 23);

$reservation->printReservation();

?>