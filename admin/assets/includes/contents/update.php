<?php

include_once dirname(__DIR__, 4) . '/Classes/contents.php';
include_once dirname(__DIR__, 4) . '/Classes/images.php';
$contents = new Contents();
$placehold = $contents->view($_GET['id']);
if (isset($_POST['title'])) {

    if ($contents->update($_GET['id'], $_POST)) {
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
            <h3> Modificar contenido <?php echo $_GET['id']; ?> </h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form class="row g-3" action="https://server.com/tutoriales-mati/proyect-html2/admin/modificar.php?id=<?php echo $_GET['id']; ?>" method="post">

                <div class="col-md-4">
                    <label for="title" class="form-laber ">title</label>
                    <input type="text" id="title" name="title" class="form-control" value="<?php echo $placehold['title']; ?>" required>
                </div>
                <div class="col-md-8">
                    <label for="cont" class="form-laber ">content</label>
                    <input type="text" id="cont" name="content" class="form-control" value="<?php echo $placehold['content']; ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-laber ">keywords</label>
                    <input type="text" id="title" name="keywords" class="form-control" value="<?php echo $placehold['keywords']; ?>">
                </div>
                <div class="col-md-8">
                    <label for="cont" class="form-laber ">description</label>
                    <input type="text" id="cont" name="description" class="form-control" value="<?php echo $placehold['description']; ?>">
                </div>
                <div class="col-md-2">
                    <label for="title" class="form-laber ">category</label>
                    <input type="text" id="title" name="category" class="form-control" value="<?php echo $placehold['category']; ?>">
                </div>
                <div class="col">
                    <button type="submit" class="btn ">Actualizar</button>
                </div>

            </form>
        </div>
    </div>
</div>