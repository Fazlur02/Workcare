<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends MY_Controller 
{
	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->form_validation->set_rules('name', 'name', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('pass1', 'pass1', 'required|trim|matches[pass2]');
		$this->form_validation->set_rules('pass2', 'pass2', 'required|trim|matches[pass1]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('regis');
		}else{
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('pass1'), PASSWORD_DEFAULT),
				'role' => $this->input->post('role', true),
				'is_active' => 1,
				'date_created' => date('Y-m-d')

			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat Akun Telah Dibuat</div>');
			redirect('login');
		}
	}
	
}