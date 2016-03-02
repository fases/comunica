<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emprestimos extends CI_Controller {

  public function __construct(){
    parent::__construct();

    if (!$this->session->userdata('usuario')){ 
        redirect(base_url("login/"), 'refresh');
    }
}


public function index(){
    $this->load->view('dashboard');
}

public function agendar()
{

    if($this->input->post()) {
        $form = $this->input->post();

        $this->form_validation->set_rules('data', 'Data do empréstimo', 'required');
        $this->form_validation->set_rules('hora', 'Horário', 'required');
        $this->form_validation->set_rules('data_devolucao', 'Data da devolução', 'required');
        $this->form_validation->set_rules('hora_devolucao', 'Horário devolução', 'required');
        $this->form_validation->set_rules('id_local', 'Local de uso do material', 'required');
        $this->form_validation->set_rules('id_material', 'Material', 'required');
        //$this->form_validation->set_rules('quantidade', 'Quantidade', 'required');
        $this->form_validation->set_rules('justificativa', 'Justificativa', 'required');
        $this->form_validation->set_rules('termos', 'Termos', 'required');


        if($this->form_validation->run() == TRUE){

            $this->load->model('emprestimo_model');
            $this->load->model('mensagem_model');

            //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 
            
            $emprestimo = new Emprestimo_model($form);
            var_dump($emprestimo); die();
            $emprestimo->cadastrar();

            $this->session->set_flashdata('mensagem', 
            array('tipo' => 'success', 'texto' => 'Solicitação de empréstimo realizada com sucesso!'));

            redirect('emprestimos/agendar');


        } else{
            $this->session->set_flashdata('mensagem', 
            array('tipo' => 'danger', 'texto' => 'Dados inválidos! Tente novamente.'));
        }
    }

        $data = array(// cria array;
        'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );


        $this->load->view('templates/header',$data);
        $this->db->order_by("nome", "asc");
        $dados['materiais'] = $this->db->get('material')->result();

        $this->db->order_by("nome", "asc");
        $dados['locais'] = $this->db->get('local')->result();
        $this->load->view('emprestimos/agendar',$dados,  NULL, TRUE);
        $this->load->view('templates/footer');
    }

    public function visualizar($id){

        $this->load->model('emprestimo_model'); //carrega o model
        $this->load->model('usuario_model');
        $this->load->model('material_model');
        $this->load->model('local_model');

        $data = array(); // cria array;
    $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
    $data['emprestimo'] = $this->emprestimo_model->consultar($id);//carrega apenas o emprestimo pelo id
    $data['usuario_emprestimo'] = $this->usuario_model->consultar($data['emprestimo']->id_usuario);
    $data['local'] = $this->local_model->consultar($data['emprestimo']->id_local);
    $data['material'] = $this->material_model->consultar($data['emprestimo']->id_material);

        $this->load->view('templates/header',$data);


        //echo "<pre>";
        //var_dump($emprestimo);die('</pre>');


        //var_dump($material->nome);die();

        $this->load->view('emprestimos/visualizar', $data);

        $this->load->view('templates/footer');


    }


    public function aprovar($id){

         $this->load->model('emprestimo_model'); //carrega o model
         $this->emprestimo_model->aprovar($id);
         redirect(base_url().'emprestimos/visualizar/'.$id);
 
    }

    public function concluir($id){

         $this->load->model('emprestimo_model'); //carrega o model
         $this->emprestimo_model->concluir($id);
         redirect(base_url().'emprestimos/visualizar/'.$id);
 
    }

}
