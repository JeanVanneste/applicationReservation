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

    function addPassenger()
    {
        
        $passengers->array_push{}
    }

    function printReservation()
    {
        printf("%d, %s, %d, %s\n", $this->id, $this->destination, $this->seatTotal, $this->insurance);
        foreach ($passengers as $passenger) 
        {
            $passenger->printPassenger();
        }
    }
}


$reservation = new Reservation(1, "Bruxelles", 3, false);

$reservation->printReservation();

?>