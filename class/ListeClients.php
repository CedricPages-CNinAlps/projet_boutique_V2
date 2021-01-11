<?php
include 'class/Client.php';

class ListeClients
{

    private $listeClients = array();

    public function __construct(){
        $bdd = new PDO('mysql:host=localhost;dbname=my_eshop', 'cedric', 'aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $clts = $bdd->query('SELECT * FROM customers');
        foreach ($clts->fetchAll(PDO::FETCH_ASSOC) as $data){
            /*echo '<pre>';
            var_dump($data);
            echo '</pre>';*/
            $new = new Client($data['id'],$data['first_name'],$data['last_name'],$data['adress'],$data['city']);
            array_push($this->listeClients,$new);
        }
    }

    public function getListeClients()
    {
        return $this->listeClients;
    }

}