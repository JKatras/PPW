<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
function __construct() {
	parent::__construct();
}
function index() {
	$this->load->view('loginform');
}
function cms_links() {
//	$data['view_file'] = 'cms_links';
//	$this->load->module('template');
//	$this->template->admin($data);
	$this->load->view('cms_links');
}

}