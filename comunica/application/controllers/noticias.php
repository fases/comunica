<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

    public function enviar()
    {
        if($this->input->post()) {
            $form = $this->input->post();

            print_r($form); die();
        }

        $this->load->view('templates/header');
        $this->load->view('noticias/enviar');
        $this->load->view('templates/footer');
    }

}
