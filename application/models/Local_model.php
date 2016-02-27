<?php

class Local_model extends CI_Model {

    public $id;
    public $nome;
    public $predio;


    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){
            $this->id  				 = isset($arr['id']) ? $arr['id'] : null;
            $this->nome 			 = isset($arr['nome']) ? $arr['nome'] : null;
            $this->predio		 = isset($arr['predio']) ? $arr['predio'] : null;
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('local');
        $this->id = $this->db->insert_id();      
    }

    public function listar(){
        return $this->db->get('local'); //SELECT * FROM local
    }

    public function consultar($id){

        //Busca com condição
        $query = $this->db->get_where('local', array('id' => $id));
        
        //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();


    }

    
}
