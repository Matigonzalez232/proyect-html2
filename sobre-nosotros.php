<?php
include_once 'assets/includes/header.php';
include_once 'assets/includes/nav.inc.php';
$content = new Contents;
$listas = $content->list();
?>
<div class="container pb-3">
    <div class="row card-grande">
        <div class="col-md-5 px-0 col-12">
            <?php if (!empty($listas[0]['imagenes'][0]['url'])) { ?>
                <img class="img-card-top" src="<?= "admin/" . $listas[0]['imagenes'][0]['url'] ?>">
            <?php } else { ?>
                <img class="img-card-top" src="assets\img\Noimage.png">
            <?php } ?>
            
        </div>
        <div class="col-md-7 col-12 c-g-texto">
            <div>
                <h3 class=""><?= $listas[0]['title']; ?></h3>
                <p class=""><?= $listas[0]['content']; ?></p>
            </div>

        </div>
    </div>

    <!-- facu si lees esto no me pidas mostrar mas de una img por card pls -->

    <!-- agrega una card por cada content del admin -->
    <div class="row mr-5 cards" id="cards-arriba">
        <?php foreach ($listas as $fila) { ?>
            <div class="col-md-4  col-12">
                <div class="card h-100 " style="width: 18rem;">
                    <!-- <?php var_dump($fila); ?> -->
                    <?php if (!empty($fila['imagenes'][0]['url'])) { ?>
                        <img class="img-card-top" src="<?= "admin/" . $fila['imagenes'][0]['url'] ?>">
                    <?php } else { ?>
                        <img class="img-card-top" src="assets\img\Noimage.png">
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
        <div class="row mr-5 cards">
            <div class="col-4  ">
                <div class="card h-100">

                    <div class="card-body">
                        <h5 class="card-title">Servicio 1</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the </p>

                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <div class="card ">

                    <div class="card-body">
                        <h5 class="card-title">Servicio 1</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the </p>

                    </div>
                </div>
            </div>
            <div class="col-4  ">
                <div class="card ">

                    <div class="card-body">
                        <h5 class="card-title">Servicio 1</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'assets/includes/footer.php';


    ?>