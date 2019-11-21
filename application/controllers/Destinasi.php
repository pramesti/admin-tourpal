<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }
    
    public function index()
    {
        $data['content']='destinasi_view';
        $data['destinasi']=$this->mData->getDestinasi();
        $this->load->view('template', $data);
    }
    
}

/* End of file Kategori.php */
