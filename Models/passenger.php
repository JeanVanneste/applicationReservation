<?php

class Passenger
{
    public $id;
    public $firstname;
    public $lastname;
    public $age;
    public $fligthId;

    function __construct($lastId, $firstname, $lastname, $age, $fligthId)
    {
        $this->id = $lastId + 1;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->fligthId = $fligthId;
    }

    function getPassengerPrice()
    {
        if ($this -> age <= 12){return 10;}
        else {return 15;}
    }

    function printPassenger()
    {
        printf("%d, %s %s, %d ans <br />", $this->id, $this->firstname, $this->lastname, $this->age);
    }
}
?>