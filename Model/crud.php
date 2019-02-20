<?php
    require_once 'conexao.php';
    
    abstract class Crud extends Conexao{
        protected $tabela;
        
        abstract public function insert();
        abstract public function update($id);
        
        public function find($id){
            $sql  = "SELECT * FROM $this->tabela WHERE id = :id";
            $stmt = Conexao::prepare($sql);
            $stmt->bindParam(':id',$id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(); 
        }
        
        public function findAll(){
            $sql = "SELECT * FROM $this->tabela";
            $stmt = Conexao::prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        
        public function eliminar($id){
            $sql  = "DELETE FROM $this->tabela WHERE id = :id";
            $stmt = Conexao::prepare($sql);
            $stmt->bindParam(':id',$id, PDO::PARAM_INT);
            return $stmt->execute();
        }
    }