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

                //var_dump($this->input->post()); die();

                $this->load->library('upload', $config);

                if($this->upload->do_upload('arquivo_1')) {
                    $dados_arquivo = $this->upload->data();


                    $this->load->model('material_producao_model');

                    //var_dump($form); die();
                    // Imprime na tela os dados enviados do form e mata a aplicacão 
                    
                    $material_producao = new Material_producao_model($form);

                    $material_producao->arquivo_1 = $dados_arquivo['full_path'];
                    $material_producao->cadastrar();

                }

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'Solicitação de produção de material gráfico enviada com sucesso!'));

                redirect(base_url().'material/producao');

            } else {
                die('Erro no upload: ' . $this->upload->display_errors());
            }

        }

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        $this->load->view('templates/header',$data);
        $this->load->view('material/producao',$data);
        $this->load->view('templates/footer');
    }

    public function impressao(){
        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('tipo_material', 'Tipo_material', 'required');
            $this->form_validation->set_rules('tipo_papel', 'Tipo_papel', 'required');
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


                    $this->load->model('material_impressao_model');

                    //print_r($form); die();
                    // Imprime na tela os dados enviados do form e mata a aplicacão 
                    
                    $material_impressao = new Material_impressao_model($form);

                    $material_impressao->arquivo_1 = $dados_arquivo['full_path'];
                    $material_impressao->cadastrar();

                }

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'Solicitação de impressão de material gráfico enviada com sucesso!'));

                redirect(base_url().'material/impressao');

            } else {
                die('Erro no upload: ' . $this->upload->display_errors());
            }
        }

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        $this->load->view('templates/header',$data);
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

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        $this->load->view('templates/header', $data);
        $this->load->view('material/cadastrar');
        $this->load->view('templates/footer');
    }
    public function consultar(){

            $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );


        //$data['materiais'] = $this->db->get('material')->result();
        //$data['data'] = $data;


            $this->load->view('templates/header',$data);

            $this->load->model('material_model');
            $data['materiais'] = $this->material_model->listar()->result_array();
            $this->load->view('material/consultar', $data);

            $this->load->view('templates/footer');
        }

        public function visualizar($id){


            $this->load->model('usuario_model'); //carrega o model
            $this->load->model('material_impressao_model'); //carrega o model
            $this->load->model('material_producao_model'); //carrega o model

           $data = array();// cria array;
            $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
            $data['impressao'] = $this->material_impressao_model->consultar($id); //carrega o evento apenas pelo id;
            $data['usuario_impressao'] = $this->usuario_model->consultar($data['impressao']->id_usuario);
        
            $this->load->view('templates/header',$data);
            $this->load->view('material/visualizar',$data);
            $this->load->view('templates/footer');


    }

    public function aprovar($id){

         $this->load->model('material_impressao_model'); //carrega o model
         $this->material_impressao_model->aprovar($id);
         redirect(base_url().'material/visualizar/'.$id);
 
    }

    public function concluir($id){

         $this->load->model('material_impressao_model'); //carrega o model
         $this->material_impressao_model->concluir($id);
         redirect(base_url().'material/visualizar/'.$id);
 
    }

        public function suspender($id){

         $this->load->model('material_model'); //carrega o model
         $this->material_impressao_model->suspender($id);
         redirect(base_url().'material/visualizar/'.$id);
 
    }

}
