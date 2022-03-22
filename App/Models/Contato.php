<?php

    namespace App\Models;

    class Contato{
        protected $db;

        public function __construct(\PDO $db){
            $this->db = $db;
        }

        public function getContatos(){
            $query = 'SELECT email, telefone FROM tb_contatos;';
            return $this->db->query($query)->fetchAll();
        }
    }

?>