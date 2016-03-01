<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
            }

    }
    public function index()
    {

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['usuario_editar'] = $this->usuario_model->consultar($this->session->userdata('usuario')->id);//carrega os dados apartir do id;

        //var_dump($data);die();


        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
            $this->form_validation->set_rules('matricula', 'Matrícula', 'required|numeric');
            $this->form_validation->set_rules('endereco', 'Endereço', 'required');
            $this->form_validation->set_rules('telefone', 'Telefone', 'required|numeric');
            

            if($this->form_validation->run() == TRUE){

            $this->load->model('usuario_model');

            $this->db->update('usuario', $form, array('id' => $this->session->userdata('usuario')->id)); 

            }
        } 


        $this->load->view('templates/header',$data);
        $this->load->view('perfil',$data);
        $this->load->view('templates/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */