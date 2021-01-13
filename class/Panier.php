<?php


class Panier
{
    // 1 - Création d'un tableau associatif
    private $panier = array();

    // 6 - Getter
    public function getPanier()
    {
        return $this->panier;
    }

    public function setPanier(array $data)
    {
        array_push($this->panier, $data);
    }

    // 3 - Méthode "add" avec paramètre id (table product)
    public function add($idArticle)
    {
        $this->panier[] = $idArticle;
        // Condition (IF)
        //Ajoute une ligne dans order_product avec 1 produit avec 1 de quantité
        //SINON Ajoute une quantité de 1 avec la quantité présente dans la table order_product
    }

    // 4 - Méthode "update" avec paramètre id (table product) & quantité (table order_product)
    public function update($idArticle, $quantity)
    {
        foreach ($this->panier as $key => $item) {
            if ($item['id'] == $idArticle) {
                $this->panier[$key]['quantity'] = $quantity;
            }
        }
    }

    // 5 - Méthode "delete" avec paramètre id (table product) qui supprime la ligne dans order_product
    public function delete($idArticle)
    {
        foreach ($this->panier as $key => $item) {
            if ($item['id'] === $idArticle) {
                unset($this->panier[$key]);
            }
        }
    }

}