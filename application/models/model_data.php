<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_data extends CI_Model {

    public function loginUser()
    {
        $result = $this->db->where('username', $this->input->post('username'))->where('password', $this->input->post('password'))->get('user');
        if ($result->num_rows()) {
            
            $admin = array(
                'id_user' => $result->row()->id_user,
                'nama_user' => $result->row()->nama_user,
                'level' => $result->row()->id_level
            );
            $this->session->set_userdata( $admin );            
            return true;
        } else {
            return false;
        }
    }
    public function getUserLogin()
    {
        if ($this->loginUser()) {
            return true;
        } else {       
            $result = $this->db->where('username', $this->input->post('username'))->where('password', $this->input->post('password'))->get('user');
            if ($result->num_rows()) {
                
                $pelanggan = array(
                    'id_pelanggan' => $result->row()->id_pelanggan,
                    'nama_pelanggan' => $result->row()->nama_pelanggan,
                    'alamat' => $result->row()->alamat,
                    'telp' => $result->row()->telp,
                    'level' => 0
            );
            $this->session->set_userdata( $user );            
            return true;
        } else {
            return false;
        }
    }
}
    public function insertUser()
    {
        $data= array(
            'nama_User' => $this->input->post('nama_User'),
            'telp' => $this->input->post('telp'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
        if ($this->db->insert('User', $data)) {
            return true;
        } else {
            return false;
        }
    }


    public function getUser()
    {
        $result = $this->db->get('User')->result();
        return $result;
    }
    
    public function getUserbyId($id = 0)
    {
        $result = $this->db->where('id_User', $id)->get('User')->row();
        return $result;
    }

    public function insertDestinasi()
    {
        $data= array(
            'nama_wisata' => $this->input->post('nama_wisata'),
            'deskripsi' => $this->input->post('deskripsi'),
            'lokasi' => $this->input->post('lokasi'),
            'cover' => $this->input->post('cover')

        );
        
        if ($this->db->insert('destinasi', $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getDestinasi()
    {
        $result = $this->db->get('destinasi')->result();
        return $result;
    }
    

    public function insertPaket()
    {
        $data= array(
            'nama_paket' => $this->input->post('nama_paket'),
            'harga' => $this->input->post('harga')
        );
        
        if ($this->db->insert('paket', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function getPaket()
    {
        $result = $this->db->get('paket')->result();
        return $result;
    }

    public function insertTourguide()
    {
        $data= array(
            'nama' => $this->input->post('nama'),
            'kemampuan' => $this->input->post('kemampuan'),
            'telp' => $this->input->post('telp'),
            'foto' => $this->input->post('foto')
        );
        
        if ($this->db->insert('Tourguide', $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function getTourguide()
    {
        $result = $this->db->get('Tourguide')->result();
        return $result;
    }

    public function insertKota()
    {
        $data= array(
            'nama_kota' => $this->input->post('nama_kota'),
            'photo' => $this->input->post('photo')
        );
        if ($this->db->insert('kota', $data)) {
            return true;
        } else {
            return false;
        }
    }
  
    public function getKota()
    {
        $result = $this->db->get('kota_tujuan')->result();
        return $result;
    }

    public function hapus($table, $id)
    {
        if($this->db->where('id_'.$table, $id)->delete($table)) {
            return true;
        } else {
            return false;
        }
    }

    public function edit_data($table, $id)
    {
        $data = $this->input->post();
        $this->db->where('id_'.$table, $id);
        return $this->db->update($table, $data);
    }


    public function getById($table, $id)
    {
        $this->db->where('id_'.$table, $id);
        return $this->db->get($table)->row();
    }
    
}

/* End of file ModelName.php */
