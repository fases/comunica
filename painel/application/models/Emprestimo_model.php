<?php

class Emprestimo_model extends CI_Model {

    public $id;
    public $data;
    public $data_devolucao;
    public $hora;
    public $hora_devolucao;
    public $id_material;
    public $justificativa;
    public $id_local;
    public $termos;
    public $status;
    public $id_usuario;
    public $obs;
    public $data_cadastro;

    public function __construct($arr = null)
    {    
        parent::__construct();

        if(!is_null($arr)){

            list($dia, $mes, $ano) = explode('/', $arr['data']);
            $this->data  = isset($arr['data']) ? "$ano-$mes-$dia" : null;

            list($dia, $mes, $ano) = explode('/', $arr['data_devolucao']);
            $this->data_devolucao  = isset($arr['data_devolucao']) ? "$ano-$mes-$dia" : null;

            $this->hora = isset($arr['hora']) ? $arr['hora'] : null;
            $this->id_material    = isset($arr['id_material']) ? $arr['id_material'] : null;
            $this->hora = isset($arr['hora']) ? $arr['hora'] : null;
            $this->hora_devolucao = isset($arr['hora_devolucao']) ? $arr['hora_devolucao'] : null;
            $this->id            = isset($arr['id']) ? $arr['id'] : null;
            $this->justificativa        = isset($arr['justificativa']) ? $arr['justificativa'] : null;
            $this->id_local         = isset($arr['id_local']) ? $arr['id_local'] : null;
            $this->termos         = isset($arr['termos']) ? $arr['termos'] : null;
            $this->status     = isset($arr['status']) ? $arr['status'] : 1;
            $this->id_usuario     = isset($arr['id_usuario']) ? $arr['id_usuario'] : $this->session->userdata('usuario')->id;
            $this->obs     = isset($arr['obs']) ? $arr['obs'] : null;
      
        }
    }

    public function cadastrar(){
        $this->db->set($this);
        $this->db->insert('emprestimo');
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
        $result = $this->db->get('emprestimo')->result_array();

        foreach($result as $k=>$r) {
            $usuario = $this->usuario_model->consultar($r['id_usuario']);

            $result[$k]['usuario'] = $usuario;
        }


        return $result;
    }

    public function consultar($id){

        //$this->db->join('usuario', 'emprestimo.id_usuario=usuario.id', 'inner');
        //$this->db->join('local', 'emprestimo.id_local=local.id', 'inner');  

        //Busca com condição
        $query = $this->db->get_where('emprestimo', array('emprestimo.id' => $id));
 
        //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();

    }

    public function aprovar($id){

        $this->db->where('id',$id);
        $this->db->update('emprestimo', array('status' => 2));

    }

    public function concluir($id){

        $this->db->where('id',$id);
        $this->db->update('emprestimo', array('status' => 3));

    }

    public function suspender($id){

        $this->db->where('id',$id);
        $this->db->update('emprestimo', array('status' => 4));

    }

        public function consultar_usuario($id){

        //$this->db->join('usuario','id_usuario=id','inner');

        //Busca com condição
        $query = $this->db->get_where('emprestimo', array('id_usuario' => $id));
 
        //row_object() retorna direto o objeto produto e não um array
        return $query->result();

    }
    
}
