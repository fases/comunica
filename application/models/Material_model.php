<?php

class Material_model extends CI_Model {

    public $id;
    public $nome;
    public $patrimonio;
    public $status;
    public $especificacao;
    public $situacao;
    public $data_cadastro;

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){
            $this->id  				 = isset($arr['id']) ? $arr['id'] : null;
            $this->nome 			 = isset($arr['nome']) ? $arr['nome'] : null;
            $this->patrimonio		 = isset($arr['patrimonio']) ? $arr['patrimonio'] : null;
            $this->status 			 = isset($arr['status']) ? $arr['status'] : 0;
            $this->especificacao	 = isset($arr['especificacao']) ? $arr['especificacao'] : null;
            $this->situacao			 = isset($arr['situacao']) ? $arr['situacao'] : null;       
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('material');
        $this->id = $this->db->insert_id();      
    }

    public function listar(){
        return $this->db->get('material'); //SELECT * FROM material
    }

    public function consultar($id){

        //Busca com condição
        $query = $this->db->get_where('material', array('id' => $id));
 
        //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();


    }

    
}
