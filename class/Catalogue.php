<?php
include 'class/Article.php';

class Catalogue
{

    private $catalogue = array(); //Création d'un attribut qui permettra l'affiche en tableau des données de la BDD

    public function __construct(){

        // Connexion à notre BDD
        $bdd = new PDO('mysql:host=localhost;dbname=my_eshop', 'cedric', 'aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        // Formulation de la requête SQL pour tous les produits disponible
        $article = $bdd->query('SELECT * FROM products WHERE availability=1');

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
    }

    public function getCatalogue()
    {
        return $this->catalogue;
    }
}