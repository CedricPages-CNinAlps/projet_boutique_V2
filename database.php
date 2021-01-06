<?php

$bdd = new PDO('mysql:host=localhost;dbname=my_eshop','cedric','aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if($bdd->connect_error){
    die('Erreur : ' .$bdd->connect_error);
}

//Query 2
echo '<h1><strong>Query 2 - Une table</strong></h1>';
$query_2= $bdd->query('SELECT * FROM products WHERE quantity=0');
while ($donnees = $query_2->fetch())
{
    echo '<p>' . $donnees['quantity'] . ' unités disponible </p>';
}

//Query 4
echo '<h1><strong>Query 4 - Une table</strong></h1>';
$query_4= $bdd->query('SELECT * FROM orders WHERE date BETWEEN ADDDATE(NOW(), INTERVAL -10 DAY) AND NOW()');
while ($donnees = $query_4->fetch())
{
    echo '<p> ID = ' . $donnees['id'] . ' => number = ' . $donnees['number'] . ' => date = ' . $donnees['date'] . ' => total = ' . $donnees['total'] . ' => customer_id = ' . $donnees['customer_id'] . '</p>';
}

//Query 5
echo '<h1><strong>Query 5 - Deux tables</strong></h1>';
$query_5= $bdd->query('SELECT name, order_product.quantity AS quantity,price FROM products INNER JOIN order_product ON products.id = order_product.product_id WHERE order_product.order_id=4');
while ($donnees = $query_5->fetch())
{
    echo '<p>Name = ' . $donnees['name'] . ' => Quantité = ' . $donnees['quantity'] . ' => Prix = ' . $donnees['price'] . ' € </p>';
}

//Query 9
echo '<h1><strong>Query 9 - Quatre tables</strong></h1>';
$query_9= $bdd->query('SELECT os.number, SUM(op.quantity*p.price) AS total_price
FROM order_product op
         INNER JOIN products p
                    ON op.product_id = p.id
         INNER JOIN orders os
                    ON op.order_id = os.id
         INNER JOIN customers c
                    ON os.customer_id = c.id
WHERE c.first_name = "Charlize"
GROUP BY os.number');
while ($donnees = $query_9->fetch())
{
    echo '<p>Name = ' . $donnees['first_name'] . ' => Numéro = ' . $donnees['number'] . ' => Total commande = ' . $donnees['total_price'] . ' € </p>';
}