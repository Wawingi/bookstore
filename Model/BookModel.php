<?php
require_once 'crud.php';
class BookModel extends Crud{
    protected $tabela = "book";
    protected $tabela1 = "author_book";
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
        $db = new Conexao();
        $sql = "INSERT INTO $this->tabela (title,isbn,price,type) VALUES (:title,:isbn,:price,:type)";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':isbn', $this->isbn);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':type', $this->type);
        $stmt->execute(); 
        return $db->getInstance()->lastInsertId();             
    }

    public function insertAuthorBook($id_author,$id_book) {
        $sql = "INSERT INTO $this->tabela1 (id_author,id_book) VALUES (:id_author,:id_book)";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':id_author', $id_author);
        $stmt->bindParam(':id_book', $id_book);
        return $stmt->execute();       
    }

    public function static(){
        $sql  = "SELECT COUNT(title) 'qtty',SUM(price) 'total' FROM $this->tabela";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetch(); 
    }

    //Return the name of Author who wrote the book
    public function findAuthorBooks($id_book){
        $sql = "SELECT a.name 
                FROM author a, book b, author_book ab 
                WHERE b.id=ab.id_book AND a.id=ab.id_author AND b.id = :id_book";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':id_book',$id_book, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    //Return the books wrotten by author
    public function findBookAuthor($name){
        $sql = "SELECT * 
                FROM author a, book b, author_book ab 
                WHERE b.id=ab.id_book AND a.id=ab.id_author AND a.name = :name";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(':name',$name, PDO::PARAM_STR);
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
        $sql = "SELECT DISTINCT(author) FROM $this->tabela";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findAll(){
        $sql = "SELECT b.id,b.title,b.isbn,b.price,b.type,a.name
                FROM book b,author a, author_book ab
                WHERE b.id=ab.id_book AND a.id=ab.id_author";
        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($id) {
        
    }

}