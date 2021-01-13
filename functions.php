<?php
include 'class/Catalogue.php';
include 'class/ListeClients.php';
include 'class/Panier.php';

//$products_list = [
//    [
//        "name" => "Anooki fond rouge",
//        "price" => 1 . " €",
//        "image" => "img/anooki_rouge_5.png"
//    ],
//    [
//        "name" => "Anooki fond bleu",
//        "price" => 10 . " €",
//        "image" => "img/anooki_bleu_5.png"
//    ],
//    [
//        "name" => "Anooki fond vert",
//        "price" => 100 . " €",
//        "image" => "img/anooki_vert_5.png"
//    ],
//    [
//        "name" => "Anooki fond cyan",
//        "price" => 1000 . " €",
//        "image" => "img/anooki_cyan_5.png"
//    ],
//    [
//        "name" => "Anooki fond jaune",
//        "price" => 10000 . " €",
//        "image" => "img/anooki_jaune_5.png"
//    ],
//    [
//        "name" => "Anooki fond orange",
//        "price" => 100000 . " €",
//        "image" => "img/anooki_orange_5.png"
//    ]
//];

function displayArticle(Article $article)
{
    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="<?= $article->getImage() ?>" class="card-img-top" width="auto" alt=<?= $article->getName() ?>>
            <div class="card-body">
                <h3 class="card-title">
                    <?php if (method_exists($article, 'getColor')) {
                        echo $article->getName() . ' de couleur ' . $article->getColor();
                    } else {
                        echo $article->getName();
                    };
                    echo ' à ' . $article->getPrice() . ' € ' ?></h3>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button class="btn btn-primary"> <?= $article->getPrice() . ' €' ?> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function displayCat($list)
{
    /*echo '<pre>';
    var_dump($list);
    echo '</pre>';*/
    foreach ($list as $item) {
        displayArticle($item);
    }
}

function displayClients(Client $client)
{
    ?>
    <tr>
        <td><?= $client->getId() ?></td>
        <td><?= $client->getFirstName() ?></td>
        <td><?= $client->getLastName() ?></td>
        <td><?= $client->getAdress() ?></td>
        <td><?= $client->getCity() ?></td>
    </tr>
    <?php
}

function displayClt($list)
{
    /*echo '<pre>';
    var_dump($list);
    echo '</pre>';*/
    foreach ($list as $clt) {
        displayClients($clt);
    }
}

function displayPanier(Panier $panier, ArticleSpecific $article)
{
// 6 - Fonction d'affichage du HTML
    ?>
    <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
            <h6 class="my-0"><?= $article->getName() ?></h6>
            <img src="<?= $article->getImage() ?>" class="card-img-top" width="auto" alt=<?= $article->getName() ?>>
            <small class="text-muted"><?= "Quantité disponible " . $article->getQuantity() ?></small>
        </div>
        <span class="text-muted"><?= $article->getPrice() ?></span>
    </li>
    <?php
}


//---------------------------------------------------------------------------------------------------------------------

//function displayItem()
//{
//    global $products_list;
//    foreach ($products_list as $product) {
//        ?>
    <!--        <div class="col-md-4">-->
    <!--            <div class="card mb-4 shadow-sm">-->
    <!--                <img src="--><? //= $product["image"] ?><!--" class="card-img-top" width="auto" alt=--><? //= $product["name"] ?><!-->-->
    <!--                <div class="card-body">-->
    <!--                    <h3 class="card-title"> --><? //= $product["name"] ?><!-- </h3>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="btn-group">-->
    <!--                            <button class="btn btn-primary"> --><? //= $product["price"] ?><!-- </button>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        --><?php
//    }
//}
//
//function displayItem1()
//{
//    $name = "Anooki fond rouge";
//    $price = 10 . " €";
//    $image = "img/anooki_rouge_5.png";
//    ?>
    <!--    <div class="col-md-4">-->
    <!--        <div class="card mb-4 shadow-sm">-->
    <!--            <img src="--><?php //echo $image ?><!--" class="card-img-top" width="auto" alt=--><? //= $name ?><!-->-->
    <!--            <div class="card-body">-->
    <!--                <h3 class="card-title"> --><? //= $name ?><!-- </h3>-->
    <!--                <div class="d-flex justify-content-between align-items-center">-->
    <!--                    <div class="btn-group">-->
    <!--                        <button class="btn btn-primary"> --><? //= $price ?><!-- </button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    --><?php
//}
//
//?>
    <!---->
<?php
//function displayItem2()
//{
//    $name = "Anooki fond bleu";
//    $price = 10 . " €";
//    $image = "img/anooki_bleu_5.png";
//    ?>
    <!--    <div class="col-md-4">-->
    <!--        <div class="card mb-4 shadow-sm">-->
    <!--            <img src="--><?php //echo $image ?><!--" class="card-img-top" width="auto" alt=--><? //= $name ?><!-->-->
    <!--            <div class="card-body">-->
    <!--                <h3 class="card-title"> --><? //= $name ?><!-- </h3>-->
    <!--                <div class="d-flex justify-content-between align-items-center">-->
    <!--                    <div class="btn-group">-->
    <!--                        <button class="btn btn-primary"> --><? //= $price ?><!-- </button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    --><?php
//}
//
//?>
    <!---->
<?php
//function displayItem3()
//{
//    $name = "Anooki fond vert";
//    $price = 10 . " €";
//    $image = "img/anooki_vert_5.png";
//    ?>
    <!--    <div class="col-md-4">-->
    <!--        <div class="card mb-4 shadow-sm">-->
    <!--            <img src="--><?php //echo $image ?><!--" class="card-img-top" width="auto" alt=--><? //= $name ?><!-->-->
    <!--            <div class="card-body">-->
    <!--                <h3 class="card-title"> --><? //= $name ?><!-- </h3>-->
    <!--                <div class="d-flex justify-content-between align-items-center">-->
    <!--                    <div class="btn-group">-->
    <!--                        <button class="btn btn-primary"> --><? //= $price ?><!-- </button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    --><?php
//}
//
//?>