<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tourguide extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }
    
    public function index()
    {
        $data['content']='tourguide';
        $data['tourguide']=$this->mData->getTourguide();
        $this->load->view('template', $data);
    }
    
}

/* End of file Kategori.php */
