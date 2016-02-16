<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material extends CI_Controller {

    public function producao(){
        if($this->input->post()) {
            $form = $this->input->post();

            print_r($form); die();
        }

        $this->load->view('templates/header');
        $this->load->view('material/producao');
        $this->load->view('templates/footer');
    }

        public function impressao(){
        if($this->input->post()) {
            $form = $this->input->post();

            print_r($form); die();
        }

        $this->load->view('templates/header');
        $this->load->view('material/impressao');
        $this->load->view('templates/footer');
    }
        public function cadastrar(){
        if($this->input->post()) {
            $form = $this->input->post();

            print_r($form); die();
        }

        $this->load->view('templates/header');
        $this->load->view('material/cadastrar');
        $this->load->view('templates/footer');
    }
        public function consultar(){
        $this->load->view('templates/header');
        $this->load->view('material/consultar');
        $this->load->view('templates/footer');
    }

}
