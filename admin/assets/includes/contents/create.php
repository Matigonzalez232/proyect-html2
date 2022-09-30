<?php

include_once dirname(__DIR__, 4) . '/Classes/contents.php';
include_once dirname(__DIR__, 4) . '/Classes/images.php';
$content = new Contents();
$image = new Images();

if (isset($_POST['title']) && isset($_FILES['img'])) {
    
    
    
    $directorio = "assets/img/uploads/";
    $new_name=  time() . $_FILES['img']['name'];
    $_FILES['img']['name']=$new_name;
    $archivo = $directorio . basename($_FILES['img']['name']);
    if ($content->create($_POST,$_GET['content']) && $image->create($archivo, $_GET['content']) && move_uploaded_file($_FILES['img']['tmp_name'], $archivo)) {
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
            <form class="row  g-3" action="<?= URL?>/admin/crear.php?content=<?php echo $_GET['content'] + 1; ?>" enctype="multipart/form-data" method="post">
            <div class="col-md-4">
                    <label for="title" class="form-laber ">title</label>
                    <input type="text" id="title" name="cod" class="form-control" value="<?= rand(1000,9999) ?>" required>
                </div>
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

                <div class="col-md-4 mt-5">

                    <input type="file" id="img" name="img" class="form-control" required>
                </div>

                <div class="col mt-5">
                    <button type="submit" class="btn ">Crear</button>
                </div>

            </form>
        </div>
    </div>
</div>
<?php


?>