<?php

class Material_impressao_model extends CI_Model {

    public $tipo_material;
    public $tipo_papel;
    public $id_usuario;
    public $justificativa;
    public $id;
    public $status;
    public $url_1;
    public $url_2;
    public $url_3;
    public $arquivo_1;
    public $arquivo_2;
    public $arquivo_3;
    public $data_cadastro;

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){

            $this->tipo_material          = isset($arr['tipo_material']) ? $arr['tipo_material'] : null;
            $this->tipo_papel              = isset($arr['tipo_papel']) ? $arr['tipo_papel'] : null;           
            $this->id_usuario              = isset($arr['id_usuario']) ? $arr['id_usuario'] : 1;
            $this->justificativa           = isset($arr['justificativa']) ? $arr['justificativa'] : null;
            $this->id                      = isset($arr['id']) ? $arr['id'] : null;
            $this->status                  = isset($arr['status']) ? $arr['status'] : 1;
            $this->url_1                   = isset($arr['url_1']) ? $arr['url_1'] : null;
            $this->url_2                   = isset($arr['url_2']) ? $arr['url_2'] : null;
            $this->url_3                   = isset($arr['url_3']) ? $arr['url_3'] : null;
            $this->arquivo_1               = isset($arr['arquivo_1']) ? $arr['arquivo_1'] : null;
            $this->arquivo_2               = isset($arr['arquivo_2']) ? $arr['arquivo_2'] : null;
            $this->arquivo_3               = isset($arr['arquivo_3']) ? $arr['arquivo_3'] : null;
      
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('impressao');
        $this->id = $this->db->insert_id();      
    }

    public function listar(){
        //listagem de todos os usuários
        
        return $this->db->get('impressao');
    }

    public function consultar($id){

        $this->db->join('usuario','id_usuario=id','inner');

        //Busca com condição
        $query = $this->db->get_where('impressao', array('id' => $id));
 
        //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();

    }

    
}
