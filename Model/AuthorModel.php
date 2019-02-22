<?php
require_once 'crud.php';
class AuthorModel extends Crud{
    protected $tabela = "author";
    private $name;
     
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

    public function insert() {
        $sql = "INSERT INTO $this->tabela (name) VALUES (:name)";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':name', $this->name);
        return $stmt->execute();        
    }


    public function findAuthorBooks($author){
        $sql = "SELECT * FROM $this->tabela WHERE author = :author";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':author',$author, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findBook($id){
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function findAuthors(){
        $sql = "SELECT * FROM $this->tabela";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findAuthorId($name){
        $sql = "SELECT * FROM $this->tabela WHERE name = :name";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':name',$name, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update($id) {
        
    }

}