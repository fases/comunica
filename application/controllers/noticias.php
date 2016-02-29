<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

    public function enviar(){
        if($this->input->post()) {
            $form = $this->input->post();

            $this->form_validation->set_rules('data_publicacao', 'Data Publicação', 'required');
            $this->form_validation->set_rules('titulo', 'Título', 'required');
            $this->form_validation->set_rules('descricao', 'Descrição', 'required');



            if($this->form_validation->run() == TRUE){

                $this->load->model('noticia_model');

                //print_r($form); die();
                // Imprime na tela os dados enviados do form e mata a aplicacão 
                
                $noticia = new Noticia_model($form);
                $noticia->cadastrar();

            $this->session->set_flashdata('mensagem', 
            array('tipo' => 'success', 'texto' => 'Solicitação de notícia enviada com sucesso!'));

            redirect('noticias/enviar');

            }
        }

        $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);
        $this->load->view('noticias/enviar');
        $this->load->view('templates/footer');
    }

        public function visualizar(){

           $data = array(// cria array;
    'usuario' => $this->session->userdata('usuario') //preenche com os dados da sessão;
        );

        $this->load->view('templates/header',$data);
        $this->load->view('noticias/visualizar',$data);
        $this->load->view('templates/footer');


    }


}
