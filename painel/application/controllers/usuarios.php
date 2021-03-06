<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

    public function __construct(){
        parent::__construct();

        // colocar verificacao de usuario logado aqui!!

        if (!$this->session->userdata('usuario')){
            redirect(base_url("login/"), 'refresh');
        }

        $tipo_usuario = $this->session->userdata('usuario')->tipo_acesso;

        //var_dump($tipo_usuario); die();
        switch($tipo_usuario) {
            case '1':
                $this->template = 'header_admin';
                $this->painel = 'painel_admin';
                $this->footer = 'footer_admin';
                break;
            case '2':
                $this->template = 'header_servidor';
                $this->painel = 'painel_usuario';
                $this->footer = 'footer_usuario';
                break;
            case '3':
                $this->template = 'header_aluno';
                $this->painel = 'painel_aluno';
                $this->footer = 'footer_aluno';
                break;
            default:
                redirect(base_url('logout'));
        }
    }

    public function cadastrar(){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

                $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        // Envio de formulario será tratado aqui
                if($this->input->post()) {
                    $form = $this->input->post();

                    $this->form_validation->set_rules('nome', 'Nome', 'required');
                    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
                    $this->form_validation->set_rules('matricula', 'Matrícula', 'required|numeric');
                    $this->form_validation->set_rules('senha', 'Senha', 'required|matches[confirma_senha]');
                    $this->form_validation->set_rules('confirma_senha', 'Confirma Senha', 'required');
                    

                    if($this->form_validation->run() == TRUE){
                        $this->load->model('usuario_model');


                        $usuario = new Usuario_model($form);
                        $usuario->cadastrar();

                //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 

                    }
                }

                $this->load->view('templates/' . $this->template, $data);
                $this->load->view('usuarios/cadastrar');
                $this->load->view('templates/' . $this->footer);
            }

            public function listar($status=null, $pag=0){

                $config = array();
                $config["base_url"] = base_url() . "usuarios/listar";
                $config["total_rows"] = $this->usuario_model->paginacao_total();
                $config["per_page"] = SITE__LIMITE;
                $config["uri_segment"] = 4;

                $this->pagination->initialize($config);

                $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;


                if(!$this->usuario_model->administrador())
                {
                    $this->session->set_flashdata('mensagem', 
                        array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
                    redirect(base_url('home'));
                }


        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );
        
        $data["links"] = $this->pagination->create_links();
        
        $this->load->view('templates/' . $this->template, $data);

        $this->load->model('usuario_model'); //carrega o model
        $data['usuarios'] = $this->usuario_model->listar($status, SITE__LIMITE, ($pag*SITE__LIMITE))->result_array(); //cria variável, realiza a consulta e organiza em uma array

        $this->load->view('usuarios/listar',$data);
        $this->load->view('templates/' . $this->footer);
    }

    public function aprovar($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

        $this->db->where('id',$id);
        $this->db->update('usuario', array('status' => 1));

        redirect(base_url("solicitacoes/cadastro"));


    }

    public function editar($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['usuario_editar'] = $this->usuario_model->consultar($id);//carrega os dados apartir do id;

        //var_dump($data);die();

        if($this->input->post()) {
            $form = $this->input->post();

            //var_dump($form);die();

            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
            $this->form_validation->set_rules('matricula', 'Matrícula', 'required|numeric');
            $this->form_validation->set_rules('endereco', 'Endereço', 'required');
            $this->form_validation->set_rules('telefone', 'Telefone', 'required');
            $this->form_validation->set_rules('tipo_acesso', 'Tipo acesso', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            

            if($this->form_validation->run() == TRUE){

                $this->load->model('usuario_model');

                $usuario = new Usuario_model((array) $data['usuario_editar']);

//            var_dump($usuario); die();

                $usuario->nome = $form['nome'];
                $usuario->email = $form['email'];
                $usuario->matricula = $form['matricula'];
                $usuario->endereco = $form['endereco'];
                $usuario->telefone = $form['telefone'];
                $usuario->status = $form['status'];
                $usuario->tipo_acesso = $form['tipo_acesso'];

                $usuario->atualizar();

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'Alteração realizada com sucesso!'));

                redirect(base_url('usuarios/editar/'.$id));

//            $this->db->update('usuario', $form, array('id' => $this->session->userdata('usuario')->id)); 

            } else {
                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'error', 'texto' => 'Por favor, confira seus dados!'));
            }
        } 


        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('usuarios/editar',$data);
        $this->load->view('templates/' . $this->footer);
    }
    
    public function deletar($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }
        $this->usuario_model->deletar($id);
        redirect(base_url('usuarios/listar'));

    }

    public function desativar($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

    //$this->load->model('usuario_model');

        $this->db->where('id',$id);
        $this->db->update('usuario', array('status' => 3));

        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');

    }

    public function visualizar($id){

        if(!$this->usuario_model->administrador())
        {
            $this->session->set_flashdata('mensagem', 
                array('tipo' => 'danger', 'texto' => 'Você não possui credenciais para esta ação!'));
            redirect(base_url('home'));
        }

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['usuario_editar'] = $this->usuario_model->consultar($id);//carrega os dados apartir do id;

        //var_dump($data);die();

        if($this->input->post()) {
            $form = $this->input->post();

            //var_dump($form);die();

            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
            $this->form_validation->set_rules('matricula', 'Matrícula', 'required|numeric');
            $this->form_validation->set_rules('status', 'Status', 'required');
            

            if($this->form_validation->run() == TRUE){

                $this->load->model('usuario_model');

                $usuario = new Usuario_model((array) $data['usuario_editar']);

//            var_dump($usuario); die();

                $usuario->nome = $form['nome'];
                $usuario->email = $form['email'];
                $usuario->matricula = $form['matricula'];
                $usuario->status = $form['status'];

                $usuario->atualizar();

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'Alteração realizada com sucesso!'));

                redirect(base_url('usuarios/visualizar/'.$id));

            } else {
                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'error', 'texto' => 'Por favor, confira seus dados!'));
            }
        }

        $this->load->view('templates/' . $this->template, $data);
        $this->load->view('usuarios/visualizar',$data);
        $this->load->view('templates/' . $this->footer);

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
                    array('tipo' => 'success', 'texto' => 'Alteração realizada com sucesso!'));

                redirect(base_url('usuarios/visualizar/'.$form['id']));

//            $this->db->update('usuario', $form, array('id' => $this->session->userdata('usuario')->id)); 

            }

        }


    }


}
