<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }
    
    public function index()
    {
        $data['content']='paket';
        $data['paket']=$this->mData->getPaket();
        $this->load->view('template', $data);
    }
    
}

/* End of file Kategori.php */
