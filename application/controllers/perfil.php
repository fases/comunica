<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
        }

        $tipo_usuario = $this->session->userdata('usuario')->tipo_acesso;

        //var_dump($tipo_usuario); die();
        switch($tipo_usuario) {
            case '1':
            $this->template = 'header_admin';
            break;
            case '2':
            $this->template = 'header_servidor';
            break;
            case '3':
            $this->template = 'header_aluno';
            break;
            default:
            redirect(base_url('logout'));
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

            //var_dump($form);die();

            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
            $this->form_validation->set_rules('matricula', 'Matrícula', 'required|numeric');
            $this->form_validation->set_rules('endereco', 'Endereço', 'required');
            $this->form_validation->set_rules('telefone', 'Telefone', 'required');
            

            if($this->form_validation->run() == TRUE){

                $this->load->model('usuario_model');

                $usuario = new Usuario_model((array) $data['usuario_editar']);

//            var_dump($usuario); die();

                $usuario->nome = $form['nome'];
                $usuario->email = $form['email'];
                $usuario->matricula = $form['matricula'];
                $usuario->endereco = $form['endereco'];
                $usuario->telefone = $form['telefone'];

                $usuario->atualizar();

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'Alteração realizada com sucesso!'));

                redirect(base_url('/perfil'));

//            $this->db->update('usuario', $form, array('id' => $this->session->userdata('usuario')->id)); 

            } else {
                
            }
        } 


        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('perfil',$data);
        $this->load->view('templates/footer');
    }

    public function alterar_senha(){

        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('id', 'ID', 'required');
            $this->form_validation->set_rules('senha', 'Senha', 'required|matches[confirma_senha]');
            $this->form_validation->set_rules('confirma_senha', 'Confirma Senha', 'required');

            if($this->form_validation->run() == TRUE){

                $usuario = new Usuario_model((array) $this->usuario_model->consultar($form['id']));

            //var_dump($usuario); die();

                $usuario->senha = md5($form['senha']);

                $usuario->atualizar();

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'Alteração de senha realizada com sucesso!'));

                redirect(base_url('perfil'));

//            $this->db->update('usuario', $form, array('id' => $this->session->userdata('usuario')->id)); 

            }

        }
        

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */