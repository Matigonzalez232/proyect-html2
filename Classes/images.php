<?php
include_once dirname(__DIR__, 1) . '/config/database.php';

class Images
{

    function __construct()
    {
        $this->db = new DB();
    }
    // function create($item)
    // {


    //     $query = $this->db->connect()->prepare('INSERT INTO images (url, content ) VALUES (:url, :content)');

    //     try {
    //         $query->execute($item);

    //         return  $query->fetchAll();
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }
    // function delete($id)
    // {
    //     $query = $this->db->connect()->prepare('DELETE FROM contents WHERE id=:id');

    //     try {
    //         $query->execute(['id'=>$id] );

    //         return  $query->fetchAll();
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }
    // function update($id,$item)
    // {

    //     $query = $this->db->connect()->prepare('UPDATE contents SET title=:title,  content=:content, keywords=:keywords, description=:description, category=:category   WHERE id = :id');

    //     $item['id'] = $id;

    //     try {
    //         $query->execute($item);
    //         return  true;
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }
    // function view($id)
    // {
    //     $query = $this->db->connect()->prepare('SELECT * FROM contents WHERE id = :id');
    //     try {
    //         $query->execute(['id'=>$id]);
    //         return  $query->fetch(PDO::FETCH_ASSOC);
    //     } catch (PDOException $e) {
    //         return false;
    //     }
    // }

    function list($id) //
    {
        $query = $this->db->connect()->query('SELECT * FROM images WHERE content = :id');
        try {
            $query->execute(['id'=>$id]);
            return  $query->fetchAll();
        } catch (PDOException $e) {
            return false;
        }
       
    }
}
