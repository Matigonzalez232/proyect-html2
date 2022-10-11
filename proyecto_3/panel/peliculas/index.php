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
                    <li>
                        <a href="../pedidos/index.php" class="btn">Pedidos </a>
                    </li>
                    <li class="active">
                        <a href="index.php" class="btn">Peliculas </a>
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
                <div class="pull-right">
                    <a href="form_registrar.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus">Nuevo</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <fieldset>
                    <legend>Listado de Peliculas</legend>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulos</th>
                                <th>Categorias</th>
                                <th>Precio</th>
                                <th class="text-center">Foto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>#</td>
                            <td>pelicula 1</td>
                            <td>Acciones</td>
                            <td>10</td>
                            <td class="text-center">Foto</td>
                            <td class="text-center"><a href="form_registrar.php" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                                <a href="form_actualizar.php" class="btn btn-succes btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                            </td>
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
        <?php


        ?>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

</body>

</html>