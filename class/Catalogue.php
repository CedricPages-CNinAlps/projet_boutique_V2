<?php
include 'class/Article.php';

class Catalogue
{

    private $catalogue = array();

    public function __construct(){
        $bdd = new PDO('mysql:host=localhost;dbname=my_eshop', 'cedric', 'aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $article = $bdd->query('SELECT * FROM products WHERE availability=1');
        /*echo '<pre>';
        var_dump($article->fetchAll());
        echo '</pre>';*/
        foreach ($article->fetchAll(PDO::FETCH_ASSOC) as $data){
            /*echo '<pre>';
            var_dump($data);
            echo '</pre>';*/
            $new = new Article($data['id'],$data['name'],$data['description'],$data['price'],$data['weight'],$data['quantity'],$data['image'],$data['availability'],$data['categorie_id']);
            array_push($this->catalogue,$new);
        }
    }

    public function getCatalogue()
    {
        return $this->catalogue;
    }
}