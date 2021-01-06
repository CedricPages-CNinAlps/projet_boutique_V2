<?php

function connect(){
$bdd = new PDO('mysql:host=localhost;dbname=my_eshop','cedric','aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
return $bdd;
}

//Query 2
//echo '<h1><strong>Query 2 - Une table</strong></h1>';
function query_2(){
    $bdd=connect();
$query_2= $bdd->query('SELECT * FROM products WHERE quantity=0');
while ($donnees = $query_2->fetch())
{
    echo '<p>' . $donnees['quantity'] . ' unités disponible </p>';
}
}

//Query 4
//echo '<h1><strong>Query 4 - Une table</strong></h1>';
function query_4(){
    $bdd = connect();
    $query_4 = $bdd->query('SELECT * FROM orders WHERE date BETWEEN ADDDATE(NOW(), INTERVAL -10 DAY) AND NOW()');
    while ($donnees = $query_4->fetch()) {
        echo '<p> ID = ' . $donnees['id'] . ' => number = ' . $donnees['number'] . ' => date = ' . $donnees['date'] . ' => total = ' . $donnees['total'] . ' => customer_id = ' . $donnees['customer_id'] . '</p>';
    }
}

//Query 5
//echo '<h1><strong>Query 5 - Deux tables</strong></h1>';
function query_5(){
$bdd = connect();
$query_5= $bdd->query('SELECT name, order_product.quantity AS quantity,price FROM products INNER JOIN order_product ON products.id = order_product.product_id WHERE order_product.order_id=4');
while ($donnees = $query_5->fetch())
{
    echo '<p>Name = ' . $donnees['name'] . ' => Quantité = ' . $donnees['quantity'] . ' => Prix = ' . $donnees['price'] . ' € </p>';
}
}

//Query 9
//echo '<h1><strong>Query 9 - Quatre tables</strong></h1>';
function query_9()
{
    $bdd = connect();
    $query_9 = $bdd->query('SELECT c.first_name, os.number, SUM(op.quantity*p.price) AS total_price
FROM order_product op
         INNER JOIN products p
                    ON op.product_id = p.id
         INNER JOIN orders os
                    ON op.order_id = os.id
         INNER JOIN customers c
                    ON os.customer_id = c.id
WHERE c.first_name = "Charlize"
GROUP BY os.number');
    while ($donnees = $query_9->fetch()) {
        echo '<p>Name = ' . $donnees['first_name'] . ' => Numéro = ' . $donnees['number'] . ' => Total commande = ' . $donnees['total_price'] . ' € </p>';
    }
}

//Query 9
//echo '<h1><strong>Query 9 - Quatre tables</strong></h1>';
function query_insert_update_delete()
{
    $bdd = connect();
    $query_insert_update_delete = $bdd->query('INSERT INTO `orders` (`id`, `number`, `date`, `total`, `customer_id`) VALUES
(10, 6, NOW(), NULL, 2);

INSERT INTO `order_product` (`product_id`, `order_id`, `quantity`) VALUES
(11, 10, 2),
(12, 10, 1),
(13, 10, 2);

INSERT INTO `products` (`id`, `name`, `description`, `price`, `weight`, `quantity`, `image`, `availability`, `categorie_id`) VALUES
(15, "Nain Dieu 2", "un beau dieu", 500, 1500, 30, "nain_dieu.jpg", 1, 3);

UPDATE products SET quantity = 500 WHERE id=2;

UPDATE products SET price = price*1.05;

DELETE FROM products WHERE products.id=14;

DELETE FROM FROM customers
WHERE id NOT IN (
    SELECT DISTINCT customer_id FROM orders
    )');
    while ($donnees = $query_insert_update_delete->fetch()) {
    }
}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1><strong>Query 2</strong></h1>
<?php query_2() ?>

<h1><strong>Query 4</strong></h1>
<?php query_4() ?>

<h1><strong>Query 5</strong></h1>
<?php query_5() ?>

<h1><strong>Query 9</strong></h1>
<?php query_9() ?>

<h1><strong>Query Insert Update Delete</strong></h1>
<?php query_insert_update_delete() ?>

</body>
</html>
