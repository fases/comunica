<?php
//$ci = get_instance();
//$ci->load->helper('date');



class Evento_model extends CI_Model {

    public $id;
    public $hora;
    public $descricao;
    public $data;
    public $data_cadastro;
    public $id_usuario;
    public $status;
    public $obs;
    public $id_local;
    public $responsavel;

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){
            $datestring = '%Y/%m/%d';
            $my_time = time($arr['data']); 
            $my_date = mdate($datestring , $my_time);
            $this->data                   = isset($arr['data']) ? $my_date : null;
            $this->hora                   = isset($arr['hora']) ? $arr['hora'] : null;
            $this->responsavel            = isset($arr['responsavel']) ? $arr['responsavel'] : null;
            $this->id_local                  = isset($arr['id_local']) ? $arr['id_local'] : null;
            $this->descricao              = isset($arr['descricao']) ? $arr['descricao'] : null;
            $this->obs                    = isset($arr['obs']) ? $arr['obs'] : null;
            $this->id                     = isset($arr['id']) ? $arr['id'] : null;
            $this->status                 = isset($arr['status']) ? $arr['status'] : 1;
            $this->id_usuario             = isset($arr['id_usuario']) ? $arr['id_usuario'] : $this->session->userdata('usuario')->id;
            
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('eventos');
        $this->id = $this->db->insert_id();      
    }
    public function listar(){
        //listagem de todos os usuários
        //$this->load->model('Usuario_model');

        $result = $this->db->get('eventos')->result_array();

        foreach($result as $k=>$r) {
            $usuario = $this->usuario_model->consultar($r['id_usuario']);

            $result[$k]['usuario'] = $usuario;
        }


        return $result;
    } 
    public function consultar($id){

        //Busca com condição
        $query = $this->db->get_where('eventos', array('id' => $id));
 
        //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();

    }

    public function aprovar($id){

        $this->db->where('id',$id);
        $this->db->update('eventos', array('status' => 2));

    }

    public function concluir($id){

        $this->db->where('id',$id);
        $this->db->update('eventos', array('status' => 3));

    }

    public function suspender($id){

        $this->db->where('id',$id);
        $this->db->update('eventos', array('status' => 4));

    }
    

    
}