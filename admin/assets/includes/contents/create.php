<?php

include_once dirname(__DIR__, 4) . '/Classes/contents.php';

$content = new Contents();
if (isset($_POST['title'])) {

    if ($content->create($_POST)) {
?>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1>creado con exito</h1>
                </div>
            </div>
        </div>

    <?php
    } else {
    ?>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1>fallo al crear</h1>
                </div>
            </div>
        </div>
<?php
    }
}

?>
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h3>Nuevo contenido</h3>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <form class="row  g-3" action="https://server.com/tutoriales-mati/proyect-html2/admin/crear.php" method="post">

                <div class="col-md-4">
                    <label for="title" class="form-laber ">title</label>
                    <input type="text" id="title" name="title" class="form-control" required>
                </div>
                <div class="col-md-8">
                    <label for="cont" class="form-laber ">content</label>
                    <input type="text" id="cont" name="content" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-laber ">keywords</label>
                    <input type="text" id="title" name="keywords" class="form-control">
                </div>
                <div class="col-md-8">
                    <label for="cont" class="form-laber ">description</label>
                    <input type="text" id="cont" name="description" class="form-control">
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-laber ">category</label>
                    <input type="text" id="title" name="category" class="form-control">
                </div>
                <div class="col mt-4">
                    <button type="submit" class="btn ">Registrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php


?>