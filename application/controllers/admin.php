<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controllername extends CI_Controller {

    public function index()
    {
        if ($this->session->userdata('logged_in')==TRUE) {
            
            redirect(base_url('index.php/admin/data_siswa'));
            
        } else {
            $this->load->view('login_view');    
        }
        
    }

    public function masuk()
    {
        if ($this->input->post('submit')){
            
            $this->form_validation->set_rules('email', 'Email', 'trim|required|email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == TRUE) {
                
                redirect(base_url('index.php/admin/data_siswa'));
                
            } else {
                $data['notif'] = validation_errors();
                $this->load->view('login_view', $data);
                
            }
            
            
        } else {
            $data['notif'] = validation_errors();
            $this->load->view('login_view', $data);
        }
        
    }

    public function logout()
    {
        $data = array(
            'username' => '',
            'logged_in' => FALSE
        );
        $this->session->ses_destroy();
        
    }

}

/* End of file Controllername.php */

