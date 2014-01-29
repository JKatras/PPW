<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller
{

	function __construct() {
		parent::__construct();
	}
	function submit(){
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[20]|xss_clean');
		$this->form_validation->set_rules('pword', 'Password', 'required|max_length[60]|xss_clean');
		$this->load->model('mdl_users');
		$query = $this->mdl_users->validate();
		if ($query) {
			$data = array(
				'username' => $this->input->post('email'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('dashboard/home');
		} else {
			redirect('users/login');
		}
	}

	function login() {
		$this->load->view('cmsHeader');
		$this->load->view('loginform');
	}
}
