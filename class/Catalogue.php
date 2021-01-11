<?php
include 'class/Article.php';
include 'class/ArticleSpecific.php';

class Catalogue
{

    private $catalogue = array(); //Création d'un attribut qui permettra l'affiche en tableau des données de la BDD
    private $color_catalogue = array();

    public function __construct(){

        // Connexion à notre BDD
        $bdd = new PDO('mysql:host=localhost;dbname=my_eshop', 'cedric', 'aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // Formulation de la requête SQL pour tous les produits disponible
        $article = $bdd->query('SELECT * FROM products WHERE availability=1');
        $color_article = $bdd->query('SELECT * FROM products WHERE availability=1 AND color IS NOT NULL');

        // Création d'une boucle afin de remonter toutes les valeurs
        foreach ($article->fetchAll(PDO::FETCH_ASSOC) as $data){
            /* Vérification des données renvoyées
            echo '<pre>';
            var_dump($data);
            echo '</pre>';*/

            // Création d'un attribut pour l'instanciation
            $new = new Article($data['id'],$data['name'],$data['description'],$data['price'],$data['weight'],$data['quantity'],$data['image'],$data['availability'],$data['categorie_id']);

            // Mise au format tableau
            array_push($this->catalogue,$new);
        }

        foreach ($color_article->fetchAll(PDO::FETCH_ASSOC) as $color_data){
            /* Vérification des données renvoyées
            echo '<pre>';
            var_dump($data);
            echo '</pre>';*/

            // Création d'un attribut pour l'instanciation
            $new_color = new ArticleSpecific($color_data['id'],$color_data['name'],$color_data['description'],$color_data['price'],$color_data['weight'],$color_data['quantity'],$color_data['image'],$color_data['availability'],$color_data['categorie_id'],$color_data['color']);

            // Mise au format tableau
            array_push($this->color_catalogue,$new_color);
        }
    }

    public function getCatalogue()
    {
        return $this->catalogue;
    }

    public function getColorCatalogue()
    {
        return $this->color_catalogue;
    }
}