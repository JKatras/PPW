<?php

class Upload extends CI_Controller {

	function __construct(){
		parent::__construct();
		if ($this->session->userdata('login_state') == FALSE) {
			redirect('users/login');
		}
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('cmsHeader');
		$this->load->view('uploadform', array('error' => ' ' ));
		$this->load->view('cmsFooter');
	}

	function do_upload()
	{
		$config['upload_path'] = './public/images/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']	= '2048';
		$config['max_width']  = '1200';
		$config['max_height']  = '800';
		$config['overwrite']  = 'true';
		$config['max_filename']  = '128';
		$config['remove_spaces']  = 'true';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('uploadform', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('cmsHeader');
			$this->load->view('upload_success', $data);
			$this->load->view('cmsFooter');
		}
	}
}
?>