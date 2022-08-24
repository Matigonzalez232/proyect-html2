

<?php
include_once __DIR__ . '/assets/includes/header.php';
include_once __DIR__ . '/assets/includes/nav.inc.php';
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Nuevo contenido</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form class="row g-3" action="<?php include_once dirname(__DIR__,1) . '/Classes/contents.php;' ?>contents.php" method="post">
                
                <div class="col-md-4">
                    <label for="title" class="form-laber ">title</label>
                    <input type="text" id="title" name="title" class="form-control" required >
                </div>
                <div class="col-md-8">
                    <label for="cont" class="form-laber ">content</label>
                    <input type="text" id="cont" name="content" class="form-control" required >
                </div>

                <div class="col">
                    <button type="submit"  class="btn " name="registro">Registrar</button>
                </div>

            </form>
        </div>
    </div>
    </div>
<?php
include_once __DIR__ . '/assets/includes/footer.php';
?>