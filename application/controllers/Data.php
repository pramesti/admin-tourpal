<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data', 'mData');
        
    }

    public function insertDestinasi()
    {
        if ($this->mData->insertDestinasi()) {
            redirect('destinasi','refresh');
        } else {
            redirect('destinasi','refresh');
        }
    }

    public function insertPaket()
    {
        if ($this->mData->insertPaket()) {
            redirect('paket','refresh');
        } else {
            redirect('paket','refresh');
        }
    }

    public function insertTourguide()
    {
        if ($this->mData->insertTourguide()) {
            redirect('tourguide','refresh');
        } else {
            redirect('tourguide','refresh');
        }
    }


    public function insertKota()
    {
        if ($this->mData->insertKota()) {
            redirect('kota','refresh');
        } else {
            redirect('kota','refresh');
        }
    }

    public function insertUser()
    {
        if ($this->mData->insertUser()) {
            redirect('login','refresh');
        } else {
            redirect('register','refresh');
        }
    }

    public function delete($table, $id)
    {
        if ($this->mData->hapus($table, $id)) {
            redirect($table,'refresh');
        } else {   
            redirect($table,'refresh');
        }        
    }

    public function edit($table = '', $id = '')
    {
        $data['content'] = 'edit';
        $data['kategori']=$this->mData->getdestinasi();
        $data['editable'] = $this->mData->getById($table, $id);
        $data['input'] = array_keys(get_object_vars($data['editable']));
        $this->load->view('template', $data);
    }

    public function simpanEdit($table, $id)
    {
        if($this->mData->edit_data($table, $id)) {
            if ($table == 'masakan') redirect('menu');
            else redirect($table);
        } else {
            redirect('edit/'.$table.'/'.$id, 'refresh');
        }
    }
    



}

/* End of file Controllername.php */
