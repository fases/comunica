<?php

class Contato_model extends CI_Model {

    public $id;
    public $id_usuario;
    public $assunto;
    public $mensagem;
    public $data_cadastro;
    public $status;
   

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){           

            $this->id        = isset($arr['id']) ? $arr['id'] : null;
            $this->id_usuario        = isset($arr['id_usuario']) ? $arr['id_usuario'] : $this->session->userdata('usuario')->id;
            $this->assunto        = isset($arr['assunto']) ? $arr['assunto'] : null;
            $this->mensagem        = isset($arr['mensagem']) ? $arr['mensagem'] : null;
            $this->status     = isset($arr['status']) ? $arr['status'] : 1;
            
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('contatos');
        $this->id = $this->db->insert_id();      
    }

    public function listar(){

        $result = $this->db->get('contatos')->result_array();

        foreach($result as $k=>$r) {
            $usuario = $this->usuario_model->consultar($r['id_usuario']);

            $result[$k]['usuario'] = $usuario;
        }


        return $result;
    }

    public function consultar($id){

            //Busca com condição
        $query = $this->db->get_where('contatos', array('id' => $id));
        
            //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();

    }

    public function aprovar($id){

        $this->db->where('id',$id);
        $this->db->update('contatos', array('status' => 2));

    }

    public function concluir($id){

        $this->db->where('id',$id);
        $this->db->update('contatos', array('status' => 3));

    }

    public function suspender($id){

        $this->db->where('id',$id);
        $this->db->update('contatos', array('status' => 4));

    }



}