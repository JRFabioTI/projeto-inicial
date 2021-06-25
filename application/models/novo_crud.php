<?php
class novo_crud extends CI_model{
    public function __construct(){
        $this->load->database();
    }
    public function insert($parametros){
        $this->db->insert('dados', $parametros);
    }
}