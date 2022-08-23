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
//    $this->create('pala','paleador');
    $this->db = new DB();
}
function create($title,$content){
    // $query = $this->db->connect()->prepare("INSERT INTO contents ( title, content) VALUES (:title,:content) ");
    // $query->execute(['title'=>$title,'content'=>$content]); 
}
function delete(){
    
}
function update(){
    
}
function view(){
    // $query = $this->db->connect()->prepare('SELECT * FROM contents WHERE id = :id');
    // $query->execute(['id' =>$this->id]);
    // return  $query->fetchAll();
}
function list(){
    $query = $this->db->connect()->query('SELECT * FROM contents');
    return  $query->fetchAll();
}
}

?>