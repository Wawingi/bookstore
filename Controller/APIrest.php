<?php
    
    header('Content-Type: application/json');
    require_once '../Model/BookModel.php';
    $book = new BookModel();
    
    $json = $book->findAll();

    echo json_encode($json,JSON_PRETTY_PRINT);

?>