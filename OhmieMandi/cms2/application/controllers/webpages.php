<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Webpages extends MX_Controller
{

function __construct() {
	parent::__construct();
}

function manage() {
	$data['query'] = $this->get('page_headline');

	$data['view_file'] = 'manage';
	$this->load->module('template');
	$this->template->admin($data);
}

function get_data_from_post() {
	$data['page_headline'] = $this->input->post('page_headline', TRUE);
	$data['page_title'] = $this->input->post('page_title', TRUE);
	$data['keywords'] = $this->input->post('keywords', TRUE);
	$data['description'] = $this->input->post('description', TRUE);
	$data['page_content'] = $this->input->post('page_content', TRUE);
	return $data;
}

function get_data_from_db($gameId) {
	$query = $this->get_where($gameId);
	foreach ($query->result() as $row) {
		$data['page_headline'] = $row->page_headline;
		$data['page_title'] = $row->page_title;
		$data['keywords'] = $row->keywords;
		$data['description'] = $row->description;
		$data['page_content'] = $row->page_content;
	}
	
	if (!isset($data)) {
		$data = '';
	} 
	
	return $data;
}
function create() {	
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
	
	$data['view_file'] = 'create';
	$this->load->module('template');
	$this->template->admin($data);
}

function submit() {
	$this->load->library('form_validation');

	$this->form_validation->set_rules('page_headline', 'Page Headline', 'required|xss_clean');
	$this->form_validation->set_rules('page_content', 'Page Content', 'required|xss_clean');

	if ($this->form_validation->run($this) == FALSE){
		$this->create();
	}else{
		$data = $this->get_data_from_post();
		$data['page_url'] = url_title($data['page_headline']);
		$gameId = $this->uri->segment(3);
		if (is_numeric($gameId)) {
			$this->_update($gameId, $data);
		}else {
			$this->_insert($data);
		}
		
		redirect('webpages/manage');
	}
}

function get($order_by){
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($gameId){
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_where($gameId);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_where_custom($col, $value);
return $query;
}

function _insert($data){
$this->load->model('mdl_webpages');
$this->mdl_webpages->_insert($data);
}

function _update($gameId, $data){
$this->load->model('mdl_webpages');
$this->mdl_webpages->_update($gameId, $data);
}

function _delete($gameId){
$this->load->model('mdl_webpages');
$this->mdl_webpages->_delete($gameId);
}

function count_where($column, $value) {
$this->load->model('mdl_webpages');
$count = $this->mdl_webpages->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_webpages');
$max_id = $this->mdl_webpages->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->_custom_query($mysql_query);
return $query;
}

}