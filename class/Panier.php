<?php


class Panier
{
    // 1 - Création d'un tableau associatif
https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/tableau-associatif/
https://tutowebdesign.com/les-tableaux-php.php

    // 2 - Construct avec connexion à la BDD
        //tableau associatif basé sur la table "products" en prenant "id" & "quantité"

    // 3 - Méthode "add" avec paramètre id (table product)

        // Condition (IF)
        //Ajoute une ligne dans order_product avec 1 produit avec 1 de quantité
        //SINON Ajoute une quantité de 1 avec la quantité présente dans la table order_product

    // 4 - Méthode "update" avec paramètre id (table product) & quantité (table order_product)

    // 5 - Méthode "delete" avec paramètre id (table product) qui supprime la ligne dans order_product

}


public function displayPanier(Panier $panier)
{
    // 6 - Fonction d'affichage du HTML
}