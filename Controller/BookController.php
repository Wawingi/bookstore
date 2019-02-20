<?php
    $op = filter_input(INPUT_POST, 'operation');
    $book = new BookModel();
    $getbook=null;
    //Post Methods
    if($op=='register'){
            $title = filter_input(INPUT_POST, 'title');
            $isbn = filter_input(INPUT_POST, 'isbn');
            $price = filter_input(INPUT_POST, 'price');
            $type = filter_input(INPUT_POST, 'type');
            $author = filter_input(INPUT_POST, 'author');
            
            if (empty($title) || empty($isbn) || empty($price) || empty($type) || empty($author)) {
               //
            } else {
                    $book->setTitle($title);
                    $book->setIsbn($isbn);
                    $book->setPrice($price);
                    $book->setType($type);
                    $book->setAuthor($author);
                    
                    if ($book->insert()) {
                        header("Location:../../View/books");
                    } else {
                        echo 'error while inserting';
                    }
            }
    } else if($op=="find"){
        $author = filter_input(INPUT_POST, 'author');
        $getbook = $book->findAuthorBooks($author);
        
    }
    
    else if($op=='editar'){
        
    } 

    //Métodos do get, obter dados
    else{
        
        //$id = base64_decode(filter_input(INPUT_GET, 'id'));
        $op= base64_decode(filter_input(INPUT_GET, 'operation'));
        
        if($op =='static'){
            $getStatic = $book->static();
        }
        else if($op=='ver'){
            
        }
        else if ($op== 'editar') {
            
        }
    } 