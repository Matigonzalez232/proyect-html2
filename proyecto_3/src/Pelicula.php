<?php

namespace project_3;

class Pelicula
{
    private $config;
    private $cn = null;

    public function __construct()
    {
        $this->config = parse_ini_file(__DIR__ . '/../config.ini');
        $this->cn = new \PDO($this->config['dns'], $this->config['usuario'], $this->config['clave'], array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
    }
    public function registrar($items)
    {
        $sql = "INSERT INTO `peliculas`( `titulo`, `descripcion`, `foto`, `precio`, `categoria_id`, `fecha`) VALUES ( :titulo, :descripcion, :foto, :precio, :categoria_id, :fecha)";
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":titulo" => $items['titulo'],
            ":descripcion" => $items['descripcion'],
            ":foto" => $items['foto'],
            ":precio" => $items['precio'],
            ":categoria_id" => $items['categoria_id'],
            ":fecha" => $items['fecha']
        );

        if ($resultado->execute($_array)) {
            return true;
        } else {
            return false;
        }
    }
    public function actualizar($items)
    {
        $sql = "UPDATE `peliculas` SET  `titulo`=:titulo, `descripcion`=:descripcion, `foto`=:foto, `precio`=:precio, `categoria_id`=:categoria_id, `fecha`=:fecha WHERE 'id'=:id";
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":titulo" => $items['titulo'],
            ":descripcion" => $items['descripcion'],
            ":foto" => $items['foto'],
            ":precio" => $items['precio'],
            ":categoria_id" => $items['categoria_id'],
            ":fecha" => $items['fecha'],
            ":id" => $items['id']
        );

        if ($resultado->execute($_array)) {
            return true;
        } else {
            return false;
        }
    }
    public function eliminar($id)
    {

        $sql = "DELETE FROM 'peliculas'  WHERE 'id'=:id";
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" => $id
        );

        if ($resultado->execute($_array)) {
            return true;
        } else {
            return false;
        }
    }
    public function mostrar()
    {
        $sql = "SELECT peliculas.id, titulo,descripcion,foto,nombre,precio,estado FROM peliculas INNER JOIN categorias 
        ON peliculas.categoria_id=categorias.id
        ORDER BY peliculas.id DESC
        ";
        $resultado = $this->cn->prepare($sql);
    
        if ($resultado->execute()) {
            return $resultado->fetchAll();
        } else {
            return [];
        }
    }
    public function mostrarPorId($id)
    {
        $sql = 'SELECT * FROM peliculas WHERE id=:id ';
        $resultado = $this->cn->prepare($sql);
        
        $_array = array(
            ":id" => $id
        );
        if ($resultado->execute($_array)) {
            return $resultado->fetch();
        } else {
            return false;
        }
    }
}
