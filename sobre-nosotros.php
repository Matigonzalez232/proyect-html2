<?php
include_once 'assets/includes/header.php';
include_once 'assets/includes/nav.inc.php';
$content = new Contents; //modificar el contenido primero haciendo un rowcount y mostrar en base a eso
$listas = $content->list();
$imagen = new Images;
?>
<div class="container pb-3">
    <div class="row card-grande">
        <div class="col-md-5 px-0 col-12">
            <img src="assets/img/Imagen 6.png" alt="">
        </div>
        <div class="col-md-7 col-12 c-g-texto">
            <div>
                <h3 class="">Servicio 1</h3>
                <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standa….

                </p>
            </div>

        </div>
    </div>

    <div class="row mr-5 cards" id="cards-arriba">
        <?php foreach ($listas as $fila) { ?>
            <div class="col-md-4  col-12">
                <div class="card h-100 " style="width: 18rem;">
                    <img src="<?php $imagenes = $imagen->list($fila['id']); echo  $imagenes['url']; ?>" class="card-img-top" alt="...">
                    <?php var_dump($imagenes); ?>
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