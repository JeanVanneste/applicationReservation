<?php

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

        $this->passengers = [];
    }

    function getTotalPrice()
    {
        //Add passenger price + insurance if taken
    }

    function addPassenger()
    {
        
    }
}

$reservation = new Reservation(1, "Bruxelles", 3, false);

?>