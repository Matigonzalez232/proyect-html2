<?php

// include_once dirname(__DIR__, 4) . '/Classes/images.php';

// $image = new Images();
// if (isset($_FILES['img'])) {
//     $directorio = "assets/img/uploads/";
//     $archivo = $directorio . basename($_FILES['img']['name']);

//     if ($image->create($archivo, $_GET['content']) && move_uploaded_file($_FILES['img']['tmp_name'],$archivo)) {
        
?>
        <!-- <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1>creada con exito</h1>
                </div>
            </div>
        </div> -->

    <?php
    // } else {
    ?>
        <!-- <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h1>fallo al crear</h1>
                </div>
            </div>
        </div> -->
<?php
//     }
// }

?>
<!-- <div class="container">
    <div class="row mt-4">
        <div class="col">
            <h3>Nueva imagen</h3>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <form class="row  g-3" action="http://server.com/pil/proyect-html2/admin/crear_img.php?content=<?php echo $_GET['content']; ?>" method="post" enctype="multipart/form-data">

                <div class="col-md-4 mt-4">

                    <input type="file" id="img" name="img" class="form-control" required>
                </div>

                <div class="col mt-4">
                    <button type="submit" class="btn ">Crear</button>
                </div>

            </form>
        </div>
    </div>
</div> -->
<?php


?>