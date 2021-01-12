<?php

function add_product()
{
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['productImage']) and $_FILES['productImage']['error'] == 0) {

        // Testons si le fichier n'est pas trop gros
        if ($_FILES['productImage']['size'] <= 10000000) {
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['productImage']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['productImage']['tmp_name'], "img/" . basename($_FILES['productImage']['name']));
                /*echo "L'envoi a bien été effectué !";*/

            }
        }
    }

    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="img/<?= $_FILES['productImage']['name'] ?>" class="card-img-top" width="auto" alt=<?= $_FILES['productImage']['name'] ?>
            <div class="card-body">
                <h3 class="card-title"> <?= htmlspecialchars($_POST["productName"]) ?> </h3>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button class="btn btn-primary"> <?= htmlspecialchars($_POST["productPrice"]) . ' €'?> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}


$valider = '';
// Testons si le nom est complété ainsi que le prix et que le prix est supérieur à 0
if (!empty($_POST["productName"]) and !empty($_POST["productPrice"]) and $_POST["productPrice"] > 0) {
    $valider = add_product();
}
exit();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Page catalogue produits">
    <meta name="author" content="Cedric Pages">
    <meta name="generator" content="Titi">
    <title>Catalogue produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="album.css" rel="stylesheet">

    <style>
        .jumbotron {
            padding-top: 3rem;
            padding-bottom: 3rem;
            margin-bottom: 0;
            background-color: #fff;
        }

        @media (min-width: 768px) {
            .jumbotron {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }
        }

        .jumbotron p:last-child {
            margin-bottom: 0;
        }

        .jumbotron h1 {
            font-weight: 300;
        }

        .jumbotron .container {
            max-width: 40rem;
        }

        footer {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        footer p {
            margin-bottom: .25rem;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        #svg {
            margin-right: 20px;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
</head>
<body>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-muted">Add some information about the album below, the author, or any other
                        background context. Make it a few sentences long so folks can pick up some informative tidbits.
                        Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" id="svg" width="20" height="20" fill="none"
                     stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
                    <circle cx="12" cy="13" r="4"/>
                </svg>
                <strong>Anooki</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1>Nos produits</h1>
            <p class="lead text-muted">Retrouvez tous nos produits pour votre plus grand plaisir.</p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?= $valider ?>
            </div>
        </div>
    </div>

</main>

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Catalogue créé par Cédric Pagès, <a href="https://cedric-pages.jimdo.com/">retrouver ma présentation</a></p>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>