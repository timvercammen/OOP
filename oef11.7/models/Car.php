<?php

abstract class Car
{
    private $car_id;
    private $car_name;
    private $car_model;
    private $car_img;

    abstract public function getType();

    public function __construct($row)
    {
        $this->setCarId($row['car_id']);
        $this->setCarImg($row['car_img']);
        $this->setCarName($row['car_name']);
        $this->setCarModel($row['car_model']);
    }

    /**
     * @return mixed
     */
    public function getCarId()
    {
        return $this->car_id;
    }

    /**
     * @param mixed $car_id
     */
    public function setCarId($car_id): void
    {
        $this->car_id = $car_id;
    }

    /**
     * @return mixed
     */
    public function getCarName()
    {
        return $this->car_name;
    }

    /**
     * @param mixed $car_name
     */
    public function setCarName($car_name): void
    {
        $this->car_name = $car_name;
    }

    /**
     * @return mixed
     */
    public function getCarModel()
    {
        return $this->car_model;
    }

    /**
     * @param mixed $car_model
     */
    public function setCarModel($car_model): void
    {
        $this->car_model = $car_model;
    }

    /**
     * @return mixed
     */
    public function getCarImg()
    {
        return $this->car_img;
    }

    /**
     * @param mixed $car_img
     */
    public function setCarImg($car_img): void
    {
        $this->car_img = $car_img;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->getCarId(),
            "image" => $this->getCarImg(),
            "name" => $this->getCarName(),
            "model" => $this->getCarModel(),
            "speed" => $this->getCarSpeed(),
            "passengers" => $this->getCarPassengers()

        ];
    }

    public function toArray2(): array
    {
        $retarr = [];

        foreach( $this as $key => $value )
        {
            $retarr[$key] = $value;
        }
        return $retarr;
    }
}