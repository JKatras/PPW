<?php
class Home extends CI_controller {

	public function __construct() {
		parent::__construct();
//		$this->load->model('usersModel');
	}
	
	public function index() {
		
		$this->load->view('header');
		
		if(!empty($_GET["action"])){
		
			if($_GET["action"]=="home"){
//				$data['regionId'] = $this->usersModel->getRegionList();
//				$this->load->view('regionBody', $data);
				$this->load->view('homeGallery');
			}
			if($_GET["action"]=="detail"){
//				$result = $this->usersModel->getCharList($_GET['regionId']);
//				$this->load->view('charByRegion', $result);
				$this->load->view('detail');
			}
			if($_GET["action"]=="checkout"){
//				$data['regionId'] = $this->usersModel->getRegionList();
//				$this->load->view('regionBody', $data);
				$this->load->view('checkout');
			}
			if($_GET["action"]=="videos"){
			//	$view->getView("views/contactForm.php");
//				header("location: userMain.php");
				$this->load->view('videos');
			}
			if($_GET["action"]=="contact"){
			//	$view->getView("views/contactForm.php");
//				header("location: userMain.php");
				$this->load->view('contactForm');
			}
			
		} else {
//			$data['regionId'] = $this->usersModel->getRegionList();
//			$this->load->view('regionBody', $data);
			$this->load->view('homeGallery');
		}
		
		$this->load->view('footer');
		
	}
}
?>	