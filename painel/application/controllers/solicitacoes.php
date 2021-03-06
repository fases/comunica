<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitacoes extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
        }
        
        $tipo_usuario = $this->session->userdata('usuario')->tipo_acesso;

        //var_dump($tipo_usuario); die();
        switch($tipo_usuario) {
            case '1':
                $this->template = 'header_admin';
                $this->painel = 'painel_admin';
                $this->footer = 'footer_admin';
                break;
            case '2':
                $this->template = 'header_servidor';
                $this->painel = 'painel_usuario';
                $this->footer = 'footer_usuario';
                break;
            case '3':
                $this->template = 'header_aluno';
                $this->painel = 'painel_aluno';
                $this->footer = 'footer_aluno';
                break;
            default:
                redirect(base_url('logout'));
        }
    }


    public function cadastro($pag=1){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        $this->load->view('templates/' . $this->template, $data);

        $this->load->model('usuario_model'); //carrega o model
        $this->db->where('status', 0); //carrega apenas usuarios indefiridos
        $data['usuarios'] = $this->usuario_model->listar_solicitacoes($pag)->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/cadastro',$data);
        $this->load->view('templates/' . $this->footer);
    }

    public function material(){  

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

        $this->load->model('material_impressao_model'); //carrega o model
        $this->load->model('material_producao_model'); //carrega o model
        $this->load->model('usuario_model');

        $data = array();// cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['materiais_impressao'] = $this->material_impressao_model->listar(); //cria variável, realiza a consulta e organiza em uma array
        $data['materiais_producao'] = $this->material_producao_model->listar(); //cria variável, realiza a consulta e organiza em uma array


        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('solicitacoes/material', $data);
        $this->load->view('templates/' . $this->footer);

        function visualizar_producao(){

            if(!$this->usuario_model->administrador())
            {
                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
                redirect(base_url('home'));
            }

             $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

             $this->load->view('templates/' . $this->template, $data);
             $this->load->view('material/visualizar',$data);
             $this->load->view('templates/' . $this->footer);
         }


     }
     public function cobertura(){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

                    $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

                    $this->load->view('templates/' . $this->template, $data);

        $this->load->model('evento_model'); //carrega o model
        $data['eventos'] = $this->evento_model->listar(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('solicitacoes/cobertura',$data);
        $this->load->view('templates/' . $this->footer);
    }

    public function editar($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

        $this->load->model('usuario');
        $evento = $this->evento_model->localizar($id);
        print_r($evento);
    }

        /* public function visualizar($id){

        $this->load->model('usuario');
        $evento = $this->evento_model->localizar($id);
        print_r($evento);
    }*/

    public function noticias(){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

                    $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

                    $this->load->view('templates/' . $this->template, $data);

        $this->load->model('noticia_model'); //carrega o model
        $data['noticias'] = $this->noticia_model->listar(); //cria variável, realiza a consulta e organiza em uma array

        //var_dump($data);die();

        $this->load->view('solicitacoes/noticias',$data);
        $this->load->view('templates/' . $this->footer);
    }
    public function emprestimos(){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

                    $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

                    $this->load->view('templates/' . $this->template, $data);

        $this->load->model('emprestimo_model'); //carrega o model
        $data['emprestimos'] = $this->emprestimo_model->listar(); //cria variável, realiza a consulta e organiza em uma array

        //var_dump($data);die();

        $this->load->view('solicitacoes/emprestimos',$data);
        $this->load->view('templates/' . $this->footer);
    }



}
