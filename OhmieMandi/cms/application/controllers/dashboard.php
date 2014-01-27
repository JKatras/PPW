<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('gameModel');
	}
	
	public function home() {
		
		$this->load->view('cmsHeader');
		$this->load->view('cmsLinks');
		$this->load->view('cmsFooter');
	}
	public function manage() {
		$data['gameId'] = $this->gameModel->getGameInfo();
		$this->load->view('cmsHeader');
		$this->load->view('manage', $data);
		$this->load->view('cmsFooter');
	}
	public function create() {
		$this->load->view('cmsHeader');
		$this->load->view('create');
		$this->load->view('cmsFooter');
		
//		$update_id = $this->uri->segment(3);
//	$submit = $this->input->post('submit', TRUE);
//	
//	if ($submit=="Submit") {
//		$data = $this->get_data_from_post();
//	}else {
//		if (is_numeric($update_id)) {
//			$data = $this->get_data_from_db($update_id);
//		}
//	}
//	if (!isset($data)) {
//		$data = $this->get_data_from_post();
//	}
//	$data['update_id'] = $update_id;
//	
//	$data['view_file'] = 'create';
//	$this->load->module('template');
//	$this->template->admin($data);
	}
	function submit() {
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('name', 'Game Name', 'required|xss_clean');
		$this->form_validation->set_rules('slug', 'Tagline', 'required|xss_clean');
		$this->form_validation->set_rules('description', 'Description', 'required|xss_clean');
		if ($this->form_validation->run($this) == FALSE){
			$this->create();
		}else{
			$data = $this->get_data_from_post();
			$data['page_url'] = url_title($data['page_headline']);
			$update_id = $this->uri->segment(3);
			if (is_numeric($update_id)) {
				$this->_update($update_id, $data);
			}else {
				$this->_insert($data);
			}
			
			redirect('webpages/manage');
		}
	}
	public function delete(){
		$this->load->view('cmsHeader');
		$this->load->view('cmsLinks');
		$this->load->view('cmsFooter');
	}
//		if(!empty($_GET["action"])){
//			
//			if($_GET["action"]=="manage"){
//				$this->load->view('manage');
//			}
//			if($_GET["action"]=="create"){
//				$this->load->view('create');
//			}
//			if($_GET["action"]=="delete"){
//				
//			}
//		} else {
//			$this->load->view('cmsLinks');
//		}
//		$this->load->view('cmsFooter');
//	}

}
