<?php

include_once dirname(__DIR__, 4) . '/Classes/images.php';
$image = new Images();
$placehold = $image->view($_GET['id']);

if (isset($_FILES['img'])) {
    $directorio = "assets/img/";
    $archivo = $directorio . basename($_FILES['img']['name']);
    
    if ($image->update($_GET['id'], $archivo)) {
?>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1>Actualizado con exito</h1>
                </div>
            </div>
        </div>

    <?php
    } else {
    ?>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1>Fallo al actualizar</h1>
                </div>
            </div>
        </div>

<?php
    }
}

?>
<div class="container my-3">
    <div class="row ">
        <div class="col">
            <h3> Modificar imagen <?php echo $_GET['id']; ?> </h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form class="row g-3" action="http://localhost/curso/proyecto-html-bootstrap_desafio2/admin/modificar_img.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">

                <div class="col-md-4 mt-4">

                    <input type="file" id="img" name="img" class="form-control" required>
                </div>

                <div class="col mt-4">
                    <button type="submit" class="btn ">Actualizar</button>
                </div>

            </form>
        </div>
    </div>
</div>
