<?php
include_once 'assets/includes/header.php';
include_once 'assets/includes/nav.inc.php';
$content = new Contents;
$listas = $content->list();
?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <?php foreach ($listas[0]['imagenes'] as $key => $imagen) { ?>
            <?php if (!empty($imagen['url'])) { ?>
                <div class="carousel-item <?= $key == 0 ? 'active' : ''; ?>">
                    <img class="d-block w-100" src="<?= URL .  "/admin/" . $imagen['url'] ?>">
                </div>

            <?php } else { ?>
                <div class="carousel-item <?= $key == 0 ? 'active' : ''; ?>">
                    <img class="d-block w-100" src="<?= NOT_IMG ?>">
                </div>
            <?php } ?>
        <?php } ?>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container pb-3">
    <div class="row card-grande">
        <div class="col-md-5 px-0 col-12">
            <?php if (!empty($listas[0]['imagenes'][0]['url'])) { ?>
                <img class="img-card-top" src="<?= "admin/" . $listas[0]['imagenes'][0]['url'] ?>">
            <?php } else { ?>
                <img class="img-card-top" src="<?= NOT_IMG ?>">
            <?php } ?>

        </div>
        <div class="col-md-7 col-12 c-g-texto">
            <div>
                <h3 class=""><?= $listas[0]['title']; ?></h3>
                <p class=""><?= $listas[0]['content']; ?></p>
            </div>

        </div>
    </div>


    <!-- agrega una card por cada content del admin -->
    <div class="row mr-5 cards" id="cards-arriba">
        <?php foreach ($listas as $fila) { ?>
            <div class="col-md-4  col-12">
                <div class="card h-100 " style="width: 18rem;">

                    <?php if (!empty($fila['imagenes'][0]['url'])) { ?>
                        <img class="img-card-top" src="<?= "admin/" . $fila['imagenes'][0]['url'] ?>">
                    <?php } else { ?>
                        <img class="img-card-top" src="<?= NOT_IMG ?>">
                    <?php } ?>

                    <div class="card-body">
                        <h5 class="card-title"><?= $fila['title']; ?></h5>
                        <p class="card-text"><?= $fila['content']; ?></p>

                    </div>
                </div>
            </div>
        <?php } ?>


    </div>
</div>

<footer class="footer-header">
    <div class="container">
    <div class="row mr-5 cards" id="cards-arriba">
        <?php foreach ($listas as $fila) { ?>
            <div class="col-md-4  col-12">
                <div class="card h-100 " style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title"><?= $fila['title']; ?></h5>
                        <p class="card-text "><?= $fila['content']; ?></p>

                    </div>
                </div>
            </div>
        <?php } ?>


    </div>
    </div>

    <?php
    include_once 'assets/includes/footer.php';


    ?>