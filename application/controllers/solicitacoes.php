<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitacoes extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
            }
    }

    public function cadastro(){

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);

        $this->load->model('usuario_model'); //carrega o model
        $this->db->where('status', 0); //carrega apenas usuarios indefiridos
        $data['usuarios'] = $this->usuario_model->listar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/cadastro',$data);
        $this->load->view('templates/footer');
    }

        public function material(){  

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );
        $this->load->view('templates/header',$data);

        $this->load->model('material_impressao_model'); //carrega o model
        $data['materiais'] = $this->material_impressao_model->listar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/material',$data);
        $this->load->view('templates/footer');
    }
        public function cobertura(){
                    $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);

        $this->load->model('evento_model'); //carrega o model
        $data['eventos'] = $this->evento_model->listar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/cobertura',$data);
        $this->load->view('templates/footer');
    }

        public function editar($id){

        $this->load->model('usuario');
        $evento = $this->evento_model->localizar($id);
        print_r($evento);
        }

        public function visualizar($id){

        $this->load->model('usuario');
        $evento = $this->evento_model->localizar($id);
        print_r($evento);
        }

        public function noticias(){

                    $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);

        $this->load->model('noticia_model'); //carrega o model
        $data['noticias'] = $this->noticia_model->listar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/noticias',$data);
        $this->load->view('templates/footer');
    }
        public function emprestimos(){

                    $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);

        $this->load->model('emprestimo_model'); //carrega o model
        $data['emprestimos'] = $this->emprestimo_model->listar()->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/emprestimos',$data);
        $this->load->view('templates/footer');
    }

}
