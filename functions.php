<?php

$products_list = [
    [
        "name" => "Anooki fond rouge",
        "price" => 10 . " €",
        "image" => "img/anooki_rouge_5.png"
    ],
    [
        "name" => "Anooki fond bleu",
        "price" => 10 . " €",
        "image" => "img/anooki_bleu_5.png"
    ],
    [
        "name" => "Anooki fond vert",
        "price" => 10 . " €",
        "image" => "img/anooki_vert_5.png"
    ],
    [
        "name" => "Anooki fond cyan",
        "price" => 10 . " €",
        "image" => "img/anooki_cyan_5.png"
    ],
    [
        "name" => "Anooki fond jaune",
        "price" => 10 . " €",
        "image" => "img/anooki_jaune_5.png"
    ],
    [
        "name" => "Anooki fond orange",
        "price" => 10 . " €",
        "image" => "img/anooki_orange_5.png"
    ]
];

//Appel BDD
function article()
{
    $article= $bdd->query('SELECT * FROM products WHERE availability=1');
    while ($donnees = $article->fetch()){}
}

function displayArticle(Article $article)
{
    echo '
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?= $product["image"] ?>" class="card-img-top" width="auto" alt=<?= $product["name"] ?>>
                <div class="card-body">
                    <h3 class="card-title"> <?= $product["name"] ?> </h3>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button class="btn btn-primary"> <?= $product["price"] ?> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>'
    }
}

function displayItem()
{
    global $products_list;
    foreach ($products_list as $product) {
        ?>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="<?= $product["image"] ?>" class="card-img-top" width="auto" alt=<?= $product["name"] ?>>
                <div class="card-body">
                    <h3 class="card-title"> <?= $product["name"] ?> </h3>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button class="btn btn-primary"> <?= $product["price"] ?> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

function displayItem1()
{
    $name = "Anooki fond rouge";
    $price = 10 . " €";
    $image = "img/anooki_rouge_5.png";
    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="<?php echo $image ?>" class="card-img-top" width="auto" alt=<?= $name ?>>
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

<?php
function displayItem2()
{
    $name = "Anooki fond bleu";
    $price = 10 . " €";
    $image = "img/anooki_bleu_5.png";
    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="<?php echo $image ?>" class="card-img-top" width="auto" alt=<?= $name ?>>
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

<?php
function displayItem3()
{
    $name = "Anooki fond vert";
    $price = 10 . " €";
    $image = "img/anooki_vert_5.png";
    ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="<?php echo $image ?>" class="card-img-top" width="auto" alt=<?= $name ?>>
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