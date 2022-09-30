<?php
include_once dirname(__DIR__, 1) . '/config/database.php';
//include de imagenes

class Contents
{

    function __construct()
    {
        $this->db = new DB();
        //generar objeto imagen
    }
    function create($item,$id)
    {


        $query = $this->db->connect()->prepare('INSERT INTO contents (id, title , content, keywords, description, category ) VALUES (:id, :title, :content, :keywords, :description, :category)');
        $item['id'] = $id;
        var_dump($item);
        try {
            $query->execute($item);

            return  true;
        } catch (PDOException $e) {
            return false;
        }
    }
    function delete($id)
    {
        $query = $this->db->connect()->prepare('DELETE FROM contents WHERE id=:id');

        try {
            $query->execute(['id' => $id]);

            return  $query->fetchAll();
        } catch (PDOException $e) {
            return false;
        }
    }
    function update($id, $item)//revisar bien que ande
    {

        $query = $this->db->connect()->prepare('UPDATE contents SET title=:title,  content=:content, keywords=:keywords, description=:description, category=:category   WHERE id = :id');

        $item['id'] = $id;

        try {
            $query->execute($item);
            return  true;
        } catch (PDOException $e) {
            return false;
        }
    }
    function view($id)
    {
        $query = $this->db->connect()->prepare('SELECT * FROM contents WHERE id = :id');
        try {
            $query->execute(['id' => $id]);
            return  $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    function list() //se puede mejorar
    {
        $query = $this->db->connect()->query('SELECT * FROM contents');
        //imagenes->list(codContenido)
        $array = $query->fetchAll();
        //a array sumale el array de imagenes 

        // return  $array;
    }
}
