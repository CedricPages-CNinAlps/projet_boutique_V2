<?php

function add_product(){
    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="img/<?=$_FILES['image']['name']?>" class="card-img-top" width="auto" alt=<?= $_FILES['image']['name'] ?>>
            <div class="card-body">
                <h3 class="card-title"> <?= htmlspecialchars($_POST["productName"]) ?> </h3>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button class="btn btn-primary"> <?= htmlspecialchars($_POST["productPrice"]) ?> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

$valider = '';
// Testons si le nom est complété ainsi que le prix et que le prix est supérieur à 0
if (!empty($_POST["productName"]) AND !empty($_POST["productPrice"]) AND $_POST["productPrice"]>0){
    $valider = "Le nom du produit est " . htmlspecialchars($_POST["productName"]) . " et il est au prix de ". htmlspecialchars($_POST["productPrice"]);
}
else {
    header('Location:http://localhost/addItem.php?isError=true');
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Page individuel produit">
    <meta name="author" content="Cedric Pages">
    <meta name="generator" content="Titi">
    <title>Item produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>

        .jumbotron p:last-child {
            margin-bottom: 0;
        }

        .jumbotron h1 {
            font-weight: 300;
        }

        footer {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        footer p {
            margin-bottom: .25rem;
        }

    </style>
</head>
<body>

<br><h2>Mon produit ajouté</h2><br>
<?= add_product(),
$valider ?>
<br>
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
{

    // Testons si le fichier n'est pas trop gros
    if ($_FILES['image']['size'] <= 10000000)
    {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['image']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['image']['tmp_name'], "img/" . basename($_FILES['image']['name']));
            echo "L'envoi a bien été effectué !";

        }
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
