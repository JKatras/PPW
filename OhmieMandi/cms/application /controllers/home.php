<?php  
class OM_Controller extends CI_Controller{
	
	public $data = array();
	
	function __construct() {
		parent::__construct();
		$this->data['errors'] = array();
		$this->data['site_name'] = config_item('site_name');
	}
}
?>

<!--<?php
class Home extends CI_controller {

	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		
		$this->load->view('header');
		
		if(!empty($_GET["action"])){
		
			if($_GET["action"]=="home"){

				$this->load->view('homeGallery');
			}
			if($_GET["action"]=="detail"){

				$this->load->view('detail');
			}
			if($_GET["action"]=="checkout"){

				$this->load->view('checkoutForm');
			}
			if($_GET["action"]=="videos"){

				$this->load->view('videos');
			}
			if($_GET["action"]=="contact"){

				$this->load->view('contactForm');
			}
			
		} else {

			$this->load->view('homeGallery');
		}
		
		$this->load->view('footer');
		
	}
}
?>	-->