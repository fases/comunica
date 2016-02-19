<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $usuario_invalido=FALSE;


        if($this->input->post()) {
            $form = $this->input->post();

            $email = $this->input->post('email');
            $senha   = md5($this->input->post('senha'));
            //print_r($senha);die();


            $this->db->where('email',$email);
            $this->db->where('senha',$senha);
            $this->db->where('status',1);
            


            $usuario = $this->db->get('usuario')->result();

          
            if ($usuario){
               $newdata = array(
                  'usuario'  => $usuario
                  );

               $this->session->set_userdata($newdata);
               redirect(base_url(), 'refresh');
           }else{
            $usuario_invalido=TRUE;
        }




    }


    $data = array(
       'usuario_invalido' => $usuario_invalido,
       );  

    $this->load->view('login',$data);
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */