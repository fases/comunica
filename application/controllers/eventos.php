<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller {

        public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
            }
    }

    public function cobertura(){
        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('data', 'Data do Evento', 'required');
            $this->form_validation->set_rules('hora', 'Horário', 'required');
            $this->form_validation->set_rules('responsavel', 'Responsável', 'required');
            $this->form_validation->set_rules('descricao', 'Descrição', 'required');
            $this->form_validation->set_rules('local', 'Local', 'required');



            if($this->form_validation->run() == TRUE){

                $this->load->model('evento_model');

                //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 
                
                $evento = new Evento_model($form);
                $evento->cadastrar();



            }
        }

        $data = array(// cria array;
        'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);
        $this->load->view('eventos/cobertura');
        $this->load->view('templates/footer');
    }


    public function visualizar(){

           $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);
        $this->load->view('eventos/visualizar',$data);
        $this->load->view('templates/footer');


    }

}
