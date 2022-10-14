<?php
require '../vendor/autoload.php';
$pelicula = new project_3\Pelicula;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['accion'] === "Registrar") {
        if (empty($_POST['titulo']))
            exit('completar el titulo');

        if (empty($_POST['descripcion']))
            exit('completar el titulo');

        if (empty($_POST['categoria_id']))
            exit('seleccionar categoria valida');

        if (!is_numeric($_POST['categoria_id']))

            exit('seleccionar categoria valida');


        $_params = array(
            'titulo' => $_POST['titulo'],
            'descripcion' => $_POST['descripcion'],
            'foto' => subirFoto(),
            'precio' => $_POST['precio'],
            'categoria_id' => $_POST['categoria_id'],
            'fecha' => date('y-m-d')

        );
        $rpt = $pelicula->registrar($_params);

        $rpt ? header('Location:peliculas/index.php') : print 'error al registrar pelicula';
    }

    if ($_POST['accion'] === "Actualizar") {
        print '<pre>';
        print_r($_POST);
        if (empty($_POST['titulo']))
            exit('completar el titulo');

        if (empty($_POST['descripcion']))
            exit('completar el titulo');

        if (empty($_POST['categoria_id']))
            exit('seleccionar categoria valida');

        if (!is_numeric($_POST['categoria_id']))

            exit('seleccionar categoria valida');


        $_params = array(
            'titulo' => $_POST['titulo'],
            'descripcion' => $_POST['descripcion'],
            'precio' => $_POST['precio'],
            'categoria_id' => $_POST['categoria_id'],
            'fecha' => date('y-m-d'),
            'id' => $_POST['id']
        );

        var_dump($_params);
        if (!empty($_POST['foto_temp']))
            $_params['foto'] = $_POST['foto_temp'];

        if (!empty($_FILE['foto']['name']))
            $_params['foto'] = subirFoto();

        $rpt = $pelicula->actualizar($_params);
        var_dump($rpt);
        $rpt ? header('Location:peliculas/index.php') : print 'error al actualizar pelicula';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $id = $_GET['id'];

    $rpt = $pelicula->eliminar($id);
    var_dump($rpt);

    $rpt ? header('Location:peliculas/index.php') : print 'error al eliminar pelicula';
}

function subirFoto()
{
    $carpeta = __DIR__ . '/../upload/';
    $archivo = $carpeta . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $archivo);
    return $_FILES['foto']['name'];
}
