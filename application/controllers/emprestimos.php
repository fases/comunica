<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Emprestimos extends CI_Controller {

  public function __construct(){
    parent::__construct();

    if (!$this->session->userdata('usuario')){ 
        redirect(base_url("login/"), 'refresh');
    }
}

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

        $data = array(// cria array;
        'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );


        $this->load->view('templates/header',$data);
        $this->db->order_by("nome", "asc");
        $dados['materiais'] = $this->db->get('material')->result();
        $this->load->view('emprestimos/agendar',$dados);
        $this->load->view('templates/footer');
    }

    public function visualizar($id){

           $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        $this->load->model('emprestimo_model'); //carrega o model
        $this->load->model('usuario_model');
        $this->load->model('material_model');

        $this->load->view('templates/header',$data);

        $emprestimo = $this->emprestimo_model->consultar($id); //carrega apenas o emprestimo pelo id

        var_dump($emprestimo);die();


        //var_dump($material->nome);die();

        $this->load->view('emprestimos/visualizar', $data, $emprestimo);

        $this->load->view('templates/footer');


    }


    public function aprovar($id){

        $this->db->where('id',$id);
        $this->db->update('emprestimo', array('status' => 2));

    }

    public function concluir($id){

        $this->db->where('id',$id);
        $this->db->update('emprestimo', array('status' => 3));

    }

    public function suspender($id){

        $this->db->where('id',$id);
        $this->db->update('emprestimo', array('status' => 0));

    }

}
