<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventos extends CI_Controller {

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

    public function cobertura(){
        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('data', 'Data do Evento', 'required');
            $this->form_validation->set_rules('hora', 'Horário', 'required');
            $this->form_validation->set_rules('responsavel', 'Responsável', 'required');
            $this->form_validation->set_rules('descricao', 'Descrição', 'required');
            $this->form_validation->set_rules('id_local', 'Local', 'required');



            if($this->form_validation->run() == TRUE){


                $this->load->model('mensagem_model');
                $this->load->model('evento_model');

                //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 
                
                $evento = new Evento_model($form);
                //var_dump($evento);die();
                $evento->cadastrar();

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'Solicitação de cobetura de evento enviada com sucesso!'));

                redirect(base_url().'eventos/cobertura');



            }
        }

        $data = array(// cria array;
        'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/' . $this->template, $data);

        $this->db->order_by("nome", "asc");
        $dados['locais'] = $this->db->get('local')->result();

        $this->load->view('eventos/cobertura',$dados);
        $this->load->view('templates/footer');
    }


    public function visualizar($id){

        $this->load->model('usuario_model');
        $this->load->model('evento_model');
        $this->load->model('local_model');

            $data = array();// cria array;
            $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
            $data['evento'] = $this->evento_model->consultar($id); //carrega o evento apenas pelo id;
            $data['usuario_evento'] = $this->usuario_model->consultar($data['evento']->id_usuario);
            $data['local_evento'] = $this->local_model->consultar($data['evento']->id_local);


            $this->load->view('templates/' . $this->template, $data);
            $this->load->view('eventos/visualizar',$data);
            $this->load->view('templates/footer');


        }

        public function aprovar($id){

         $this->load->model('evento_model'); //carrega o model
         $this->evento_model->aprovar($id);
         redirect(base_url().'eventos/visualizar/'.$id);
         
     }

     public function concluir($id){

         $this->load->model('evento_model'); //carrega o model
         $this->evento_model->concluir($id);
         redirect(base_url().'eventos/visualizar/'.$id);
         
     }

     public function suspender($id){

         $this->load->model('evento_model'); //carrega o model
         $this->evento_model->suspender($id);
         redirect(base_url().'eventos/visualizar/'.$id);
         
     }

 }
