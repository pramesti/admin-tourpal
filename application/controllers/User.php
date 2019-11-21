<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }

    public function index()
    {
        $data['content']='user';
        $data['user']=$this->mData->getuser();
        $this->load->view('template', $data);
    }

}

/* End of file Controllername.php */
