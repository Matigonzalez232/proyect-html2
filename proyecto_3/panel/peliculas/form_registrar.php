<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kawschool Store</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Kawschool Store</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active">
                        <a href="index.php" class="btn">Pedidos </a>
                    </li>
                    <li>
                        <a href="../peliculas/index.php" class="btn">Peliculas </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Admin <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Salir</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container" id="main">
        <div class="row">
            <div class="col-md-12">
                <fieldset>
                    <legend>Datos de la pelicula</legend>
                    <form method="POST" action="../acciones.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="titulo" class="form-label">Titulo</label>
                                <input type="text" class="form-control" name="titulo" required>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="description" class="form-label">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="" cols="3" required></textarea>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label >Categorias</label>
                                <select class="form-control" name="categoria_id"  required>
                                    <option value="">--selection--</option>
                                    
                                    <?php 
                                    require '../../src/categoria.php' ;
                                    $categoria = new project_3\Categoria;
                                    $info_categoria = $categoria->mostrar();
                                    $cantidad = count($info_categoria);
                                    for ($x = 0; $x < $cantidad; $x++){
                                        $item=$info_categoria[$x];

                                    ?>
                                    <option value="<?php print $item['id'] ?>"><?php print $item['nombre'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto" required>

                            </div>
                        </div>
                        <div class="row" mb-4>
                            <div class="col-md-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precio" placeholder="0.00" required>

                            </div>
                        </div>
                        <div style="margin-top: 20px;">
                            <input type="submit" name="accion" class="btn btn-primary " value="Registrar">
                            <a href="index.php" class="btn btn-default">Cancelar</a>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

</body>

</html>