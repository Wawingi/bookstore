<?php
    $op = filter_input(INPUT_POST, 'operation');
    $author = new AuthorModel();
    //$getbook=null;
    //Post Methods
    if($op=='register_author'){    
        $name = filter_input(INPUT_POST, 'name');
        $id_book = filter_input(INPUT_POST, 'id_book');

        if (empty($name)) {
            //
        } else {

            $author->setName($name);  

                if ($author->insert()) {
                    header("Location:../../View/books/verlivro.php?operation=".base64_encode('verlivro')."&id=".base64_encode($id_book));
                } else {
                    echo 'error while inserting';
                }
        }
    }