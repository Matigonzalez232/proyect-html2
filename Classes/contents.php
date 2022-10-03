<?php
include_once dirname(__DIR__, 1) . '/config/database.php';
include_once 'images.php';

class Contents
{

    function __construct()
    {
        $this->db = new DB();
        $this->imagen = new Images;
    }
    function create($item)
    {


        $query = $this->db->connect()->prepare('INSERT INTO contents (cod, title, content, keywords, description, category ) VALUES (:cod, :title, :content, :keywords, :description, :category)');
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
    function update($id, $item) //revisar bien que ande
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
            return [];
        }
    }

    function list()
    {
        $items = [];
        $query = $this->db->connect()->query('SELECT * FROM contents');


        foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $item) {
            $item["imagenes"] = $this->imagen->list($item['cod']);;
            array_push($items, $item);
        }

        return  $items;
    }
}
