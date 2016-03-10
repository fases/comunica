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

            
            $this->id_usuario    = isset($arr['id_usuario']) ? $arr['id_usuario'] : $this->session->userdata('usuario')->id;
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
        if($this->input->post()) {
            $form = $this->input->post();

            if($form['data_inicio'] && $form['data_inicio'] != null){
            list($dia, $mes, $ano) = explode('/', $form['data_inicio']);
            $this->db->where('data_cadastro >=', "$ano-$mes-$dia");
            list($dia, $mes, $ano) = explode('/', $form['data_fim']);
            $this->db->where('data_cadastro <=', "$ano-$mes-$dia");
            }

            if($form['status'] != 0){
                 $this->db->where('status =', $form['status']);
            }

           
        }
        
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

        public function consultar_usuario($id){

        //Busca com condição
        $query = $this->db->get_where('producao', array('id_usuario' => $id));
        
        //row_object() retorna direto o objeto produto e não um array
        return $query->result();

    }


        public function aprovar($id){

        $this->db->where('id',$id);
        $this->db->update('producao', array('status' => 2));

    }

    public function concluir($id){

        $this->db->where('id',$id);
        $this->db->update('producao', array('status' => 3));

    }

    public function suspender($id){

        $this->db->where('id',$id);
        $this->db->update('producao', array('status' => 4));

    }


    
}
