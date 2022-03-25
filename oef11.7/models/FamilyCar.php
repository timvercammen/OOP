<?php

class FamilyCar extends Car
{
    protected $car_passengers;

    public function __construct($row)
    {
        parent::__construct($row);
        $this->setCarPassengers($row['car_passengers']);
    }

    /**
     * @return mixed
     */
    public function getCarPassengers()
    {
        return $this->car_passengers;
    }

    /**
     * @param mixed $car_passengers
     */
    public function setCarPassengers($car_passengers): void
    {
        $this->car_passengers = $car_passengers;
    }

    public function getType()
    {
        return 'family';
    }

}