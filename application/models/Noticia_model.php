<?php

class Noticia_model extends CI_Model {

    public $id;
    public $titulo;
    public $descricao;
    public $data_publicacao;
    public $data_cadastro;
    public $id_usuario;
    public $status;
    public $url_1;
    public $url_2;
    public $url_3;
    public $arquivo_1;
    public $arquivo_2;
    public $arquivo_3;

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){            
            $datestring = '%Y/%m/%d';
            $my_time = time($arr['data_publicacao']); 
            $my_date = mdate($datestring , $my_time);

            $this->data_publicacao          = isset($arr['data_publicacao']) ? $my_date : null;
            $this->id_usuario    = isset($arr['id_usuario']) ? $arr['id_usuario'] : 1;
            $this->titulo        = isset($arr['titulo']) ? $arr['titulo'] : null;
            $this->descricao     = isset($arr['descricao']) ? $arr['descricao'] : null;
            $this->id            = isset($arr['id']) ? $arr['id'] : null;
            $this->status        = isset($arr['status']) ? $arr['status'] : 1;
            $this->url_1         = isset($arr['url_1']) ? $arr['url_1'] : null;
            $this->url_2         = isset($arr['url_2']) ? $arr['url_2'] : null;
            $this->url_3         = isset($arr['url_3']) ? $arr['url_3'] : null;
            $this->arquivo_1     = isset($arr['arquivo_1']) ? $arr['arquivo_1'] : null;
            $this->arquivo_2     = isset($arr['arquivo_2']) ? $arr['arquivo_2'] : null;
            $this->arquivo_3     = isset($arr['arquivo_3']) ? $arr['arquivo_3'] : null;
      
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('noticias');
        $this->id = $this->db->insert_id();      
    }

    public function consultar(){
    return $this->db->get('noticias'); //SELECT * FROM noticias
    }

    
}