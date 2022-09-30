<?php
include_once dirname(__DIR__, 1) . '/config/database.php';

class Images //relacionarlas a traves de un code de la bd
{

    function __construct()
    {
        $this->db = new DB();
    }
    function create($url, $content)
    {


        $query = $this->db->connect()->prepare('INSERT INTO images (url, content ) VALUES (:url, :content)');

        try {
            $query->execute(['url' => $url, 'content' => $content]);

            return  true;
        } catch (PDOException $e) {
            return false;
        }
    }

    function update($id, $url)
    {

        $query = $this->db->connect()->prepare('UPDATE images SET url=:url WHERE id = :id');



        try {
            $query->execute(['id' => $id, 'url' => $url]);
            return  true;
        } catch (PDOException $e) {
            return false;
        }
    }
    function view($id)
    {
        $query = $this->db->connect()->prepare('SELECT * FROM images WHERE id = :id');
        try {
            $query->execute(['id' => $id]);
            return  $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }
    function delete($id)
    {
        var_dump($imagen = $this->view($id));
        if (unlink($imagen['url'])) {
            $query = $this->db->connect()->prepare('DELETE FROM images WHERE id=:id');

            try {
                $query->execute(['id' => $id]);

                return  $query->fetchAll();
            } catch (PDOException $e) {
                return false;
            }
        } else {
            echo "falso";
        }
    }
    function list($id) //
    {
        $query = $this->db->connect()->prepare('SELECT * FROM images WHERE content = :id');
        try {
            $query->execute(['id' => $id]);
            return  $query->fetchAll();
        } catch (PDOException $e) {
            return false;
        }
    }
}

