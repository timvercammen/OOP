<?php

class SportsCar extends Car
{
    protected $car_speed;

    public function __construct($row)
    {
        parent::__construct($row);
        $this->setCarSpeed($row['car_speed']);
    }


    /**
     * @return mixed
     */
    public function getCarSpeed()
    {
        return $this->car_speed;
    }

    /**
     * @param mixed $car_speed
     */
    public function setCarSpeed($car_speed): void
    {
        $this->car_speed = $car_speed;
    }

    public function getType()
    {
        return 'sports';
    }

}