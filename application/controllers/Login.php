<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }
    
    public function index()
    {
        $this->load->view('login_view');
    }

    public function prosesLogin()
    {
        if ($this->mData->getPenontonLogin()  ) {
            
            redirect('movie');
        
        } else {
           
          redirect('login');
           
        }
        
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');   
    }

}

/* End of file Login.php */
