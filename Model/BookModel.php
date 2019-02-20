<?php
require_once 'crud.php';
class BookModel extends Crud{
    protected $tabela = "book";
    private $title;
    private $isbn;
    private $price;
    private $type;
    private $author;
     
    function getTitle() {
        return $this->title;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function getPrice() {
        return $this->price;
    }

    function getType() {
        return $this->type;
    }

    function getAuthor() {
        return $this->author;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setAuthor($author) {
        $this->author = $author;
    }


    public function insert() {
        $sql = "INSERT INTO $this->tabela (title,author,isbn,price,type) VALUES (:title,:author,:isbn,:price,:type)";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':author', $this->author);
        $stmt->bindParam(':isbn', $this->isbn);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':type', $this->type);
        return $stmt->execute();        
    }

    public function static(){
        $sql  = "SELECT COUNT(title) 'qtty',SUM(price) 'total' FROM $this->tabela";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetch(); 
    }

    public function findAuthorBooks($author){
        $sql = "SELECT * FROM $this->tabela WHERE author = :author";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':author',$author, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findAuthors(){
        $sql = "SELECT DISTINCT(author) FROM $this->tabela";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($id) {
        
    }

}