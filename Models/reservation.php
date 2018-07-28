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
        $price = 0;
        foreach ($this->passengers as $passenger) {
            $price += $passenger->getPassengerPrice();
        }
        if ($this->insurance){$price += 20;}
        return $price;
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

    function isComplete()
    {
        if (count($passengers) == $seatTotal)
            {return true;}
        else
            {return false;}
    }
}

?>
