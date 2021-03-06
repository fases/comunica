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

    public function listar($status, $limite = SITE__LIMITE, $inicio = 1){

        $this->db->limit($limite, $inicio);

        if($this->input->post()) {
            $form = $this->input->post();
            $this->db->where('nome =', $form['nome']);
        }

        //var_dump($status);die();

        if($status) {
            $this->db->where('status =', $status);
        }
        $this->db->where('id !=',  $this->session->userdata('usuario')->id);
        $this->db->order_by("nome", "asc"); 
        return $this->db->get('usuario');
    }

        public function listar_solicitacoes(){

        if($this->input->post()) {
            $form = $this->input->post();
            list($dia, $mes, $ano) = explode('/', $form['data_inicio']);
            $this->db->where('data_cadastro >=', "$ano-$mes-$dia");
            list($dia, $mes, $ano) = explode('/', $form['data_fim']);
            $this->db->where('data_cadastro <=', "$ano-$mes-$dia");
        }

        $this->db->where('status', 0);
        $this->db->where('id !=',  $this->session->userdata('usuario')->id);
        $this->db->order_by("nome", "asc"); 
        return $this->db->get('usuario');
    }

    public function deletar($id){
        $this->db->where('id',$id);
        $this->db->update('usuario', array('status' => 3));
    }

    public function atualizar(){
        $this->db->where('id', $this->id);
        return $this->db->update('usuario',$this);

    }
    public function consultar($id){

        //Busca com condição
        $query = $this->db->get_where('usuario', array('id' => $id));

        //row_object() retorna direto o objeto produto e não um array
        return $query->row_object();

    }

    public function tem_permissao($id) 
    {
        if(is_array($id)) 
        {
            return (in_array($this->session->usuario->tipo_acesso, $id)) ? true : false;
        }

        return ($this->session->usuario->tipo_acesso == $id) ? true : false;
    }

    public function administrador(){
        return $this->session->userdata('usuario')->tipo_acesso < PERM__SERVIDOR ? true : false;
    }

    public function servidor(){
        return $this->session->userdata('usuario')->tipo_acesso < PERM__ALUNO ? true : false;
    }

    public function logado(){

        $usuario = $this->session->userdata('usuario');

        return (!empty($usuario) ? ture: false);

    }

    public function paginacao_total() {
        return $this->db->count_all("usuario");
    }


}
