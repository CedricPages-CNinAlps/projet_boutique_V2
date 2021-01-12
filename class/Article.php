<?php

class Article {

    //attributs présents dans la BDD
    private $id;
    private $name;
    private $description;
    private $price;
    private $weight;
    private $quantity;
    private $image;
    private $availability;
    private $categorie_id;

    //CONSTRUCT avec initialisation des attributs
    public function __construct($id,$name,$description,$price,$weight,$quantity,$image,$availability,$categorie_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->weight = $weight;
        $this->quantity = $quantity;
        $this->image = $image;
        $this->availability = $availability;
        $this->categorie_id = $categorie_id;
    }

    //Methode GETTER afin de retourner la valeur
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    /*public function getDescription()
    {
        return $this->description;
    }*/

    public function getPrice()
    {
        return $this->price;
    }

    /*public function getWeight()
    {
        return $this->weight;
    }*/

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getImage()
    {
        return $this->image;
    }

    /*public function getAvailability()
    {
        return $this->availability;
    }

    public function getCategorieId()
    {
        return $this->categorie_id;
    }*/
}