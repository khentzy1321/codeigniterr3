<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->helper('url');
    }
    public function index()
    {
        $data['profiles'] = $this->ProfileModel->get_all_profile();
        $this->load->view('profile/index', $data);
    }
    public function create()
    {
        $this->load->view('profile/create');
    }

    public function store()
    {
        $data = [
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'address' => $this->input->post('address'),
            'date' => $this->input->post('date'),
        ];
        $this->ProfileModel->add_profile($data);
        redirect('profiles');
    }

    public function edit($id)
    {
        $data['profile'] = $this->ProfileModel->get_profile($id);
        $this->load->view('profile/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'address' => $this->input->post('address'),
            'date' => $this->input->post('date'),
        ];
        $this->ProfileModel->update_profile($id,$data);
        redirect('profiles');
    }
    public function delete($id)
    {
        $this->ProfileModel->delete_profile($id);
        redirect('profiles');
    }
}
?>