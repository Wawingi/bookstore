<?php
    $op = filter_input(INPUT_POST, 'operation');
    $book = new BookModel();
    $author = new AuthorModel();
    $getbook=null;
    //Post Methods
    if($op=='register'){
            $title = filter_input(INPUT_POST, 'title');
            $isbn = filter_input(INPUT_POST, 'isbn');
            $price = filter_input(INPUT_POST, 'price');
            $type = filter_input(INPUT_POST, 'type');
            
            if (empty($title) || empty($isbn) || empty($price) || empty($type)) {
               //
            } else {

                    if($type=="Used"){
                        $price -=(25*$price)/100;
                    }
                    if($type=="New"){
                        $price -=(10*$price)/100;
                    }

                    $book->setTitle($title);
                    $book->setIsbn($isbn);
                    $book->setPrice($price);
                    $book->setType($type);
                                    
                    if ($book->insert()) {
                        header("Location:../../View/books/");
                    } else {
                        echo 'error while inserting';
                    }
            }
    } else if($op=='register_author_book'){

        $name = filter_input(INPUT_POST, 'author');
        $id_book = filter_input(INPUT_POST, 'id_book');

        $getAuthorId = $author->findAuthorId($name);
        
        if($book->insertAuthorBook($getAuthorId->id,$id_book)){
            header("Location:../../View/books");
        }

    } else if($op=='editar'){
        
    } else if($op =='find'){
        
        $name = filter_input(INPUT_POST,'author');
        $getbook = $book->findBookAuthor($name);

    }

    //Métodos do get, obter dados
    else{
        
        $id = base64_decode(filter_input(INPUT_GET, 'id'));
        $op= base64_decode(filter_input(INPUT_GET, 'operation'));

        if($op =='static'){
            $getStatic = $book->static();
        }
        else if($op == 'verlivro'){
            $getbook = $book->findBook($id);
        }
        else if ($op == 'eliminar') {
            if($book->eliminar($id)){
                
            }
        }
    } 