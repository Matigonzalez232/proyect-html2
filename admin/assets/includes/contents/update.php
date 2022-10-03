<?php

include_once dirname(__DIR__, 4) . '/Classes/contents.php';
include_once dirname(__DIR__, 4) . '/Classes/images.php';
$contents = new Contents();
$image = new images;
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
$placehold = $contents->view($_GET['id']);

if (isset($_FILES['img'])) { //funciona hasta el if

    foreach ($_FILES['img']['tmp_name'] as $key => $tmp_name) {
        if ($_FILES['img']['size'][$key] > 0 && $_FILES['img']['type'][$key] == "image/jpeg" || $_FILES['img']['type'][$key] == "image/png") {
            $directorio = "assets/img/uploads/";
            $new_name =  time() . $_FILES['img']['name'][$key];
            
        }
    }
}
// if (isset($_FILES['img']) && ($_FILES['img']['size'] > 0 && ($_FILES['img']['type'] == "image/jpeg") || $_FILES['img']['type'] == "image/png")) {
//     $directorio = "assets/img/uploads/";
//     $new_name =  time() . $_FILES['img']['name'];
//     $_FILES['img']['name'] = $new_name;
//     $archivo = $directorio . basename($_FILES['img']['name']);

//     if ($image->create($archivo, $placehold['cod']) && move_uploaded_file($_FILES['img']['tmp_name'], $archivo)) {
//     
?>
// <div class="container">
    // <div class="row mt-3">
        // <div class="col">
            // <h1>Actualizado con exito</h1>

            // </div>
        // </div>
    // </div>

// <?php

    //     }
    // }
    if (isset($_GET['id'])) {
        if (isset($_GET['imgDelete'])) {

            $image->delete($_GET['imgDelete']);
        }
        $lista = $image->list($placehold['cod']); //uso el codigo de contenido para listar imagenes


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
            <form class="row g-3" action="<?= URL ?>/admin/modificar.php?id=<?php echo $_GET['id']; ?>" method="post">

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
            <form class="row g-3" action="<?= URL ?>/admin/modificar.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data" method="post">
                <div class="col-md-4 mt-4">
                    <input type="file" id="img" name="img[]" class="form-control" multiple>

                </div>
                <div class="col mt-4">
                    <button type="submit" class="btn ">Agregar</button>
                </div>
            </form>
            <div class="container mt-4">
                <div class="row">
                    <?php
                    foreach ($lista as $imagen) {
                    ?>
                        <div class="card col-4" style="width: 18rem;">
                            <img class="card-img-top" src="<?= URL ?>/admin/<?= $imagen['url']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <a href="modificar.php?class=images&action=list&imgDelete=<?php echo $imagen['id']; ?>&id=<?php echo $_GET['id']; ?>" class="btn btn-primary">delete</a>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>