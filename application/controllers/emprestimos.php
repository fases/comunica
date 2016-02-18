<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emprestimos extends CI_Controller {

    public function agendar()
    {

        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('data', 'Data do empréstimo', 'required');
            $this->form_validation->set_rules('hora', 'Horário', 'required');
            $this->form_validation->set_rules('data_devolucao', 'Data da devolução', 'required');
           $this->form_validation->set_rules('hora_devolucao', 'Horário devolução', 'required');
           $this->form_validation->set_rules('local', 'Local de uso do material', 'required');
           $this->form_validation->set_rules('id_material', 'Material', 'required');
           $this->form_validation->set_rules('quantidade', 'Quantidade', 'required');
          $this->form_validation->set_rules('justificativa', 'Justificativa', 'required');
          $this->form_validation->set_rules('termos', 'Termos', 'required');


            if($this->form_validation->run() == TRUE){

                $this->load->model('emprestimo_model');

                //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 
                
                $emprestimo = new Emprestimo_model($form);
                $emprestimo->cadastrar();

            } else{
                echo "Ocorreu algum erro!";
            }
        }

        $this->load->view('templates/header');
        $this->db->order_by("nome", "asc");
        $dados['materiais'] = $this->db->get('material')->result();
        $this->load->view('emprestimos/agendar',$dados);
        $this->load->view('templates/footer');
    }

}
