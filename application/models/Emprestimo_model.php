<?php

class Emprestimo_model extends CI_Model {

    public $id;
    public $data;
    public $data_devolucao;
    public $hora;
    public $hora_devolucao;
    public $id_material;
    public $justificativa;
    public $local;
    public $termos;
    public $status;
    public $id_usuario;
    public $obs;
    public $data_cadastro;

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){

            $datestring = '%Y/%m/%d';
            $my_time = time($arr['data']); 
            $my_date = mdate($datestring , $my_time);
            $this->data  = isset($arr['data']) ? $my_date : null;

            $datestring = '%Y/%m/%d';
            $my_time = time($arr['data_devolucao']); 
            $my_date = mdate($datestring , $my_time);
            $this->data_devolucao          = isset($arr['data_devolucao']) ? $my_date : null;

            $this->hora = isset($arr['hora']) ? $arr['hora'] : null;
            $this->id_material    = isset($arr['id_material']) ? $arr['id_material'] : null;
            $this->hora = isset($arr['hora']) ? $arr['hora'] : null;
            $this->hora_devolucao = isset($arr['hora_devolucao']) ? $arr['hora_devolucao'] : null;
            $this->id            = isset($arr['id']) ? $arr['id'] : null;
            $this->justificativa        = isset($arr['justificativa']) ? $arr['justificativa'] : null;
            $this->local         = isset($arr['local']) ? $arr['local'] : null;
            $this->termos         = isset($arr['termos']) ? $arr['termos'] : null;
            $this->status     = isset($arr['status']) ? $arr['status'] : 1;
            $this->id_usuario     = isset($arr['id_usuario']) ? $arr['id_usuario'] : 1;
            $this->obs     = isset($arr['obs']) ? $arr['obs'] : null;
      
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('emprestimo');
        $this->id = $this->db->insert_id();      
    }

    
}