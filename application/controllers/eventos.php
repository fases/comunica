<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller {

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

        $this->load->view('templates/header');
        $this->load->view('eventos/cobertura');
        $this->load->view('templates/footer');
    }

}
