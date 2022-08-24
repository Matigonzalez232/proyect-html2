<?php 
include_once 'config/database.php';

class Contents {
public $id;
private $title;
private $content;
private $keywords;
private $description;
private $category;

function __construct()
{
//    $this->create('pala','paleador');//53min usa los archivos para que te lleguen?
    $this->db = new DB();
    $this->title=$_POST['title'];
    $this->content=$_POST['content'];
}
function create($item){
    $query = $this->db->connect()->prepare('INSERT INTO contents (title , content ) VALUES (title = :title, content = :content)');
    try {
        $query->execute([
            'title' => $item['title'],
            'content' => $item['content']

        ]);
        return  $query->fetchAll();
    } catch (PDOException $e) {
        return false;
    }
}
function delete(){
    
}
function update($item){
    $query = $this->db->connect()->prepare('UPDATE contents SET title = :title, content = :content WHERE id =:id');
    try {
        $query->execute([
            'id' => $item['id'],
            'title' => $item['title'],
            'content' => $item['content']

        ]);
        return  $query->fetchAll();
    } catch (PDOException $e) {
        return false;
    }
    
}
function view($id){
    $query = $this->db->connect()->prepare('SELECT * FROM contents WHERE id = :id');
    try {
    $query->execute(['id' =>$this->id]);
    return  $query->fetchAll();
} catch (PDOException $e) {
    return false;
}
   
}
function list(){
    $query = $this->db->connect()->query('SELECT * FROM contents');
    return  $query->fetchAll();
}
}

?>