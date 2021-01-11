<?php
include 'class/Article.php';

class ArticleSpecific extends Article  //Création de l'héritage de la class Article
{
    //Attribut
    private $color;

    //Lien entre le parent (Article) et l'enfant (ArticleSpecific)
    public function __construct($id, $name, $description, $price, $weight, $quantity, $image, $availability, $categorie_id, $color)
    {
        parent::__construct($id, $name, $description, $price, $weight, $quantity, $image, $availability, $categorie_id);
        $this->color=$color;
    }

    //Getter
    public function getColor()
    {
        return $this->color;
    }
}