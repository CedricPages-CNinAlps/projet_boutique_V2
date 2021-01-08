<?php

class connexion
{

    function connect()
    {
        $bdd = new PDO('mysql:host=localhost;dbname=my_eshop', 'cedric', 'aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $bdd;
        if ($bdd->connect_error)
        {
            die('Erreur : ' . $bdd->connect_error);
        }
        echo 'Connexion serveur réussie';
    }

}