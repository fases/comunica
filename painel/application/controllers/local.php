<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Local extends CI_Controller {

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



    public function cadastrar(){
        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('predio', 'Prédio', 'required');

            if($this->form_validation->run() == TRUE){

                $this->load->model('local_model');


                $local = new Local_model($form);
                $local->cadastrar();

                //print_r($local); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 


            }
        }

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('local/cadastrar');
        $this->load->view('templates/' . $this->footer);
    }


}
