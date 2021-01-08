<?php
include 'class/Article.php';

class Catalogue
{

    private $catalogue = array();

    public function __construct(){
        $bdd = new PDO('mysql:host=localhost;dbname=my_eshop', 'cedric', 'aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $article = $bdd->query('SELECT * FROM products WHERE availability=1');
        var_dump($article->fetchAll());
    }
}