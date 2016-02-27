<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Local extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
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

        $this->load->view('templates/header', $data);
        $this->load->view('local/cadastrar');
        $this->load->view('templates/footer');
    }


}
