<?php

class Article {

    //attributs
    private $id;
    private $name;
    private $desciption;
    private $price;
    private $weight;
    private $quantity;
    private $image;
    private $availability;
    private $categorie_id;

    //CONSTRUCT
    public function __construct($id,$name,$desciption,$price,$weight,$quantity,$image,$availability,$categorie_id)
    {
        $this->id;
        $this->name;
        $this->desciption;
        $this->price;
        $this->weight;
        $this->quantity;
        $this->image;
        $this->availability;
        $this->categorie_id;
    }

    //Methode GETTER
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDesciption()
    {
        return $this->desciption;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function getCategorieId()
    {
        return $this->categorie_id;
    }
}