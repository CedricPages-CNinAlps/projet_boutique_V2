<?php

$bdd = new PDO('mysql:host=localhost;dbname=my_eshop', 'cedric', 'aqw123456789', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if ($bdd->connect_error) {
    die('Erreur : ' . $bdd->connect_error);
}


$reponse = $bdd->query('SELECT name, price, quantity FROM products ORDER BY name ASC');

$requete = $bdd->prepare('SELECT * FROM products WHERE name=?');
$requete->execute(array('Nain D1'));

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cours PHP-BDD / MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cours.css">
</head>
<body>
<h1>Connexion BDD - PHP</h1>

<?php

echo 'Connexion serveur réussie';

while ($donnees = $reponse->fetch()) {
    echo '<p>' . $donnees['name'] . ' - ' . $donnees['price'] . ' € - ' . $donnees['quantity'] . ' unités disponible </p>';
}

?>

<br><br><br><br>

<?php

while ($donnees = $requete->fetch()) {
    echo '<p>' . $donnees['name'] . ' - ' . $donnees['price'] . ' € - ' . $donnees['quantity'] . ' unités disponible </p>';
}

var_dump($requete);

?>

</body>
</html>
