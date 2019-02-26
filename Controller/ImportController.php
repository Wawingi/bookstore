<?php

    $op = filter_input(INPUT_POST, 'operation');

    if($op=='import'){

        $extension = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);

        if($extension != "csv"){
            echo "Invalid extension";
        }else{
            $folder = "../Assets/upload/";
            $temp = $_FILES["file"]["tmp_name"];
            $nome = $_FILES["file"]["name"];
            
            $filename = explode(".", $nome);
            $filename = $filename[0].".$extension";            

            if(move_uploaded_file($temp, $folder.$filename)):
                
                importarDados($filename);
                
                echo "SUCESSO";
            else:
                echo "ERROR";
            endif;
        }

    }

    function importarDados($filename){
            $book = new BookModel();
            $author = new AuthorModel();
            $handle = fopen("../Assets/upload/$filename", "r");
            $row = 0;
            while ($line = fgetcsv($handle, 1000, ",")) {
                if ($row++ == 0) {
                    continue;
                }
                
                $type = $line[0];
                $title = $line[1];
                $isbn = $line[2];
                $price = $line[3];
                $authorname = $line[4];

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

                //função que pega um nome conjuto e o separa e persiste no banco de dados
                if(strstr($authorname,"|")){            
                    $name = explode("|",$authorname);
                    $cont = count($name);
                    $returnedIds = array();
                    for($i=0;$i<$cont;$i++){
                        $author->setName($name[$i]);
                        $getId1 = $author->insert();
                        $returnedIds[$i]=$getId1;
                    }
                    $getId2 = $book->insert();
                    
                    for($j=0;$j<$cont;$j++){
                        $book->insertAuthorBook($returnedIds[$j],$getId2);
                    }                                    
                } else {
                    $author->setName($authorname);
                    $getId1 = $author->insert();
                    $getId2 = $book->insert(); 

                    echo "ID AUTHOR:".$getId1;
                    echo "ID BOOK:".$getId2;

                    if ( $getId1 && $getId2) {
                        if($book->insertAuthorBook($getId1,$getId2)){
                             //exit();
                             header("Location:../../View/import");
                        }
                    } else {
                        echo 'error while inserting';
                    }
                }             
            } 
            fclose($handle);
    }