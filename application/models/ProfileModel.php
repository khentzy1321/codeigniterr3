<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileModel extends CI_Model {
    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function get_all_profile()
    {
        return $this->db->get('profiles')->result();
    } 
     
    public function get_profile($id)
    {
        return $this->db->get_where('profiles', array('id' => $id))->row();
    }

    public function add_profile($data)
    {
        return $this->db->insert('profiles', $data);
    } 

    public function update_profile($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('profiles', $data);
    }

    public function delete_profile($id)
    {
        return $this->db->delete('profiles', array('id' => $id));
    }
     

}
?>