<?php

class Comentario_model extends CI_Model {

    public $id;
    public $id_usuario;
    public $id_contato;
    public $mensagem;
    public $data_cadastro;
    

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){           

            $this->id        = isset($arr['id']) ? $arr['id'] : null;
            $this->id_usuario        = isset($arr['id_usuario']) ? $arr['id_usuario'] : $this->session->userdata('usuario')->id;
            $this->mensagem        = isset($arr['mensagem']) ? $arr['mensagem'] : null;
            $this->id_contato        = isset($arr['id_contato']) ? $arr['id_contato'] : null;
            
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('comentarios');
        $this->id = $this->db->insert_id();      
    }


    public function listar($id){

        $result = $this->db->get_where('comentarios', array('id_contato' => $id))->result_array();

        foreach($result as $k=>$r) {
            $usuario = $this->usuario_model->consultar($r['id_usuario']);

            $result[$k]['usuario'] = $usuario;
        }
        
        return $result;
    }

    public function concluir($id){

        $this->db->where('id',$id);
        $this->db->update('comentarios', array('status' => 3));

    }


}