<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_controller {
	
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('login_state') == FALSE) {
			redirect('users/login');
		}
		$this->load->model('game_model');
	//	$this->load->model('imgModel');
	}
	
	public function home() {
		$this->load->view('cmsHeader');
		$this->load->view('cmsLinks');
		$this->load->view('cmsFooter');
	}
	public function manage() {
		$data['gameId'] = $this->game_model->getGameInfo();
	//	$data['imgId']= $this->imgModel->getImgInfo();
		$this->load->view('cmsHeader');
		$this->load->view('manage', $data);
		$this->load->view('cmsFooter');
	}
	public function create() {		
		$gameId = $this->uri->segment(3);
		$submit = $this->input->post('submit', TRUE);
	
		if ($submit=="Submit") {
			$data = $this->get_data_from_post();
		}else {
			if (is_numeric($gameId)) {
				$data = $this->get_data_from_db($gameId);
			}
		}
		if (!isset($data)) {
			$data = $this->get_data_from_post();
		}
		$data['gameId'] = $gameId;
		
		$this->load->view('cmsHeader');
		$this->load->view('create', $data);
		$this->load->view('cmsFooter');
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
//			$data['page_url'] = url_title($data['page_headline']);
			$gameId = $this->uri->segment(3);
			if (is_numeric($gameId)) {
				$this->_update($gameId, $data);
			}else {
				$this->_insert($data);
			}
			
			redirect('dashboard/manage');
		}
	}
	public function delete(){
		$this->load->view('cmsHeader');
		$this->load->view('cmsLinks');
		$this->load->view('cmsFooter');
	}
	function get_data_from_post() {
		$data['name'] = $this->input->post('name', TRUE);
		$data['keywords'] = $this->input->post('keywords', TRUE);
		$data['slug'] = $this->input->post('slug', TRUE);
		$data['description'] = $this->input->post('description', TRUE);
		$data['requirements'] = $this->input->post('requirements', TRUE);
		$data['compatibility'] = $this->input->post('compatibility', TRUE);
		$data['price'] = $this->input->post('price', TRUE);
		return $data;
	}
	
	function get_data_from_db($gameId) {
		$query = $this->get_where($gameId);
		foreach ($query->result() as $row) {
			$data['name'] = $row->name;
			$data['keywords'] = $row->keywords;
			$data['slug'] = $row->slug;
			$data['description'] = $row->description;
			$data['requirements'] = $row->requirements;
			$data['compatibility'] = $row->compatibility;
			$data['price'] = $row->price;
	}
		
		if (!isset($data)) {
			$data = '';
		} 
		
		return $data;
	}
	function get_where($gameId){
		$this->load->model('mdl_webpages');
		$query = $this->mdl_webpages->get_where($gameId);
		return $query;
	}
	function _update($gameId, $data){
		$this->load->model('mdl_webpages');
		$this->mdl_webpages->_update($gameId, $data);
	}
	function _insert($data){
		$this->load->model('mdl_webpages');
		$this->mdl_webpages->_insert($data);
	}
}