<?php

class Material_producao_model extends CI_Model {


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
    public $tipo;
    public $data_cadastro;

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){

            
            $this->id_usuario    = isset($arr['id_usuario']) ? $arr['id_usuario'] : 1;
            $this->justificativa = isset($arr['justificativa']) ? $arr['justificativa'] : null;
            $this->id            = isset($arr['id']) ? $arr['id'] : null;
            $this->status        = isset($arr['status']) ? $arr['status'] : 1;
            $this->url_1         = isset($arr['url_1']) ? $arr['url_1'] : null;
            $this->url_2         = isset($arr['url_2']) ? $arr['url_2'] : null;
            $this->url_3         = isset($arr['url_3']) ? $arr['url_3'] : null;
            $this->arquivo_1     = isset($arr['arquivo_1']) ? $arr['arquivo_1'] : null;
            $this->arquivo_2     = isset($arr['arquivo_2']) ? $arr['arquivo_2'] : null;
            $this->arquivo_3     = isset($arr['arquivo_3']) ? $arr['arquivo_3'] : null;
            $this->tipo          = isset($arr['tipo']) ? $arr['tipo'] : null;
            
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('producao');
        $this->id = $this->db->insert_id();      
    }

    public function listar(){
        //listagem de todos os usuários
        //$this->load->model('Usuario_model');
        
        //$this->db->where('status !=',3);

        $result = $this->db->get('producao')->result_array();

        foreach($result as $k=>$r) {
            $usuario = $this->usuario_model->consultar($r['id_usuario']);

            $result[$k]['usuario'] = $usuario;
        }


        return $result;
    }


    public function consultar($id){

        //Busca com condição
        $query = $this->db->get_where('producao', array('id' => $id));
        
        //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();

    }


    
}
