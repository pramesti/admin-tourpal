<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }
    
    public function index()
    {
    
        $data['content'] = 'kota_view';
        // $data['genre']=$this->mData->getGenre();
        $data['kota']=$this->mData->getKota();
        $this->load->view('template', $data);
        
    }
    
}
