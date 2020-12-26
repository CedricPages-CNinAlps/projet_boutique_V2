<?php
$name= "Anooki fond rouge";
$price = 10 . " €";
$image = "img/anooki_rouge_5.png";

function block_product(){
    global $name, $price, $image;
    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="<?= $image ?>" class="card-img-top" width="auto" alt=<?= $name ?>>
            <div class="card-body">
                <h3 class="card-title"> <?= $name ?> </h3>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button class="btn btn-primary"> <?= $price ?> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
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

<br><h2>Mon produit</h2><br>
<?php block_product() ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
