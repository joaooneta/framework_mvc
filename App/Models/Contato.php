<?php

    namespace App\Models;
    use MF\Model\Model;

    class Contato extends Model{

        public function getContatos(){
            $query = 'SELECT email, telefone FROM tb_contatos;';
            return $this->db->query($query)->fetchAll();
        }
    }

?>