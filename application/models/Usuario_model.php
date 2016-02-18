<?php

class Usuario_model extends CI_Model {

    public $id;
    public $nome;
    public $matricula;
    public $email;
    public $senha;
    public $telefone;
    public $status;
    public $endereco;
    public $tipo_acesso;
    public $informacao;
    public $data_cadastro;

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){
            $datestring = '%Y/%m/%d';
            $my_time = time($arr['data']); 
            $my_date = mdate($datestring , $my_time);
            $this->id            = isset($arr['id']) ? $arr['id'] : null;
            $this->nome          = isset($arr['nome']) ? $arr['nome'] : null;
            $this->matricula     = isset($arr['matricula']) ? $arr['matricula'] : null;
            $this->email         = isset($arr['email']) ? $arr['email'] : null;
            $this->senha         = isset($arr['senha']) ? md5($arr['senha']) : null; 
            $this->telefone      = isset($arr['telefone']) ? $arr['telefone'] : null;
            $this->status        = isset($arr['status']) ? $arr['status'] : 0;
            $this->endereco      = isset($arr['endereco']) ? $arr['endereco'] : null;
            $this->tipo_acesso   = isset($arr['tipo_acesso']) ? $arr['tipo_acesso'] : 2;
            $this->informacao    = isset($arr['informacao']) ? $arr['informacao'] : null;      
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('usuario');
        $this->id = $this->db->insert_id();      
    }

    public function consultar(){
        return $this->db->get('usuario'); //SELECT * FROM material
    }

    



}
