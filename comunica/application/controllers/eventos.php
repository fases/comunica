<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller {

    public function cobertura()
    {
        if($this->input->post()) {
            $form = $this->input->post();

            print_r($form); die();
        }

        $this->load->view('templates/header');
        $this->load->view('eventos/cobertura');
        $this->load->view('templates/footer');
    }

}
