<?php


class Client
{
    //attributs
    private $id;
    private $first_name;
    private $last_name;
    private $adress;
    private $city;

    //construct
    public function __construct($id,$first_name,$last_name,$adress,$city){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->adress = $adress;
        $this->city = $city;
    }

    //Getter
    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getAdress()
    {
        return $this->adress;
    }

    public function getCity()
    {
        return $this->city;
    }
}