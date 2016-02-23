<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Material extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
            }
    }

    public function producao(){
        if($this->input->post()) {

            $form = $this->input->post();

            $this->form_validation->set_rules('tipo', 'Tipo', 'required');
            $this->form_validation->set_rules('justificativa', 'Justificativa', 'required');

            if($this->form_validation->run() == TRUE){

                $config = array(
                    'upload_path' => './arquivos/producao/',
                    'allowed_types' => 'jpg|jpeg|png|gif|pdf'
                );

                // var_dump($this->input->post()); die();

                $this->load->library('upload', $config);

                if($this->upload->do_upload('arquivo_1')) {
                    $dados_arquivo = $this->upload->data();


                    $this->load->model('material_producao_model');

                    //print_r($form); die();
                    // Imprime na tela os dados enviados do form e mata a aplicacão 
                    
                    $material_producao = new Material_producao_model($form);

                    $material_producao->arquivo_1 = $dados_arquivo['full_path'];
                    $material_producao->cadastrar();

                }
            } else {
                die('Erro no upload: ' . $this->upload->display_errors());
            }

        }

        $this->load->view('templates/header');
        $this->load->view('material/producao');
        $this->load->view('templates/footer');
    }

        public function impressao(){
        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('tipo_material', 'Tipo_material', 'required');
            $this->form_validation->set_rules('tipo_papel', 'Tipo_papel', 'required');
            $this->form_validation->set_rules('justificativa', 'Justificativa', 'required');


                if($this->form_validation->run() == TRUE){

                $this->load->model('material_impressao_model');

                // print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 
                
                $material_producao = new Material_impressao_model($form);
                $material_producao->cadastrar();

            }
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




        //$data['materiais'] = $this->db->get('material')->result();
        //$data['data'] = $data;


        $this->load->view('templates/header');

         $this->load->model('material_model');
        $data['materiais'] = $this->material_model->consultar()->result_array();
        $this->load->view('material/consultar', $data);

        $this->load->view('templates/footer');
    }

}
