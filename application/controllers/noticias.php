<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

    public function __construct(){
        parent::__construct();

        if (!$this->session->userdata('usuario')){ 
            redirect(base_url("login/"), 'refresh');
        }
    }

    public function enviar(){
        if($this->input->post()) {

            $form = $this->input->post();

            $this->form_validation->set_rules('data_publicacao', 'Data Publicação', 'required');
            $this->form_validation->set_rules('titulo', 'Título', 'required');
            $this->form_validation->set_rules('descricao', 'Descrição', 'required');

            //var_dump($this->input->post());die();

            if($this->form_validation->run() == TRUE){

                $config = array(
                    'upload_path' => './arquivos/noticias/',
                    'allowed_types' => 'jpg|jpeg|png|gif|pdf'
                    );

                // var_dump($this->input->post()); die();

                $this->load->library('upload', $config);

                if($this->upload->do_upload('arquivo_1')) {
                    $dados_arquivo = $this->upload->data();


                    $this->load->model('noticia_model');

                    //print_r($form); die();
                    // Imprime na tela os dados enviados do form e mata a aplicacão 
                    
                    $noticia = new Noticia_model($form);

                    $noticia->arquivo_1 = $dados_arquivo['full_path'];

                    //var_dump($noticia);die();
                    $noticia->cadastrar();

                }

                $this->session->set_flashdata('mensagem', 
                    array('tipo' => 'success', 'texto' => 'Solicitação de notícia enviada com sucesso!'));

                redirect(base_url().'noticias/enviar');

            }else {
                die('Erro no upload: ' . $this->upload->display_errors());
            }
        }

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
    );

        $this->load->view('templates/header',$data);
        $this->load->view('noticias/enviar',$data);
        $this->load->view('templates/footer');
    }

    public function visualizar($id){

        $this->load->model('usuario_model');
        $this->load->model('noticia_model');

        $data = array(); // cria array;
        $data['usuario'] = $this->session->userdata('usuario'); //preenche com os dados da sessão;
        $data['noticia'] = $this->noticia_model->consultar($id);//carrega apenas a notícia pelo id;
        $data['usuario_noticia'] = $this->usuario_model->consultar($data['noticia']->id_usuario);



           $this->load->view('templates/header',$data);
           $this->load->view('noticias/visualizar',$data);
           $this->load->view('templates/footer');


       }

           public function aprovar($id){

         $this->load->model('noticia_model'); //carrega o model
         $this->noticia_model->aprovar($id);
         redirect(base_url().'noticias/visualizar/'.$id);
 
    }

    public function concluir($id){

         $this->load->model('noticia_model'); //carrega o model
         $this->noticia_model->concluir($id);
         redirect(base_url().'noticias/visualizar/'.$id);
 
    }

        public function suspender($id){

         $this->load->model('noticia_model'); //carrega o model
         $this->noticia_model->suspender($id);
         redirect(base_url().'noticias/visualizar/'.$id);
 
    }


   }
