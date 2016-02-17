<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material extends CI_Controller {

    public function producao(){
        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('tipo', 'Tipo', 'required');
            $this->form_validation->set_rules('justificativa', 'Justificativa', 'required|numeric');

            if($this->form_validation->run() == TRUE){

                $this->load->model('material_producao_model');


                $material_producao = new Material_producao_model($form);
                $material_producao->cadastrar();

                //print_r($material); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 


            }
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

            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('patrimonio', 'Patrimônio', 'required|numeric');
            $this->form_validation->set_rules('situacao', 'Situação', 'required');
            $this->form_validation->set_rules('especificacao', 'Especificações', 'required');

            if($this->form_validation->run() == TRUE){

                $this->load->model('material_model');


                $material = new Material_model($form);
                $material->cadastrar();

                //print_r($material); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 


            }
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
