<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		
		$this->load->view('cmsHeader');
		
		if(!empty($_GET["action"])){
			
			if($_GET["action"]=="manage"){
				$this->load->view('manage');
			}
			if($_GET["action"]=="create"){
				$this->load->view('create');
			}
			if($_GET["action"]=="delete"){
				
			}
		} else {
			$this->load->view('cmsLinks');
		}
		$this->load->view('cmsFooter');
	}

}
