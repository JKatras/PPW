<!--<!DOCTYPE html> <!--[if IE 9]<html class="lt-ie10" lang="en" ><![endif]--*> 
<html class="no-js" lang="en" > 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>OhmieMandi</title> 
	<link rel="stylesheet" href="assets/css/normalize.css"> 
	<link rel="stylesheet" href="assets/css/foundation.min.css">
	<link rel="stylesheet" href="assets/css/global.css" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
	<header>
		<h1>
			<a href="index.html">
				<img id="logo" src="assets/images/OM_logo_purple_70x70.png" alt="OhmieMandi Logo" />
				<img id="logo-tag" src="assets/images/OM-tag.png" alt="OhmieMandi" />
			</a>
		</h1>
		<nav>
			<ul>
				<li class="active"><a href="index.html"><h1>Games</h1></a></li>
				<li><a href="videos.html"><h1>Videos</h1></a></li>
				<li><a href="contact.html"><h1>Contact</h1></a></li>
			</ul>
		</nav>
	</header>-->
<?php
class Home extends CI_controller {

	public function __construct() {
		parent::__construct();
//		$this->load->model('usersModel');
	}
	
	public function index() {
		
		$this->load->view('header');
		$this->load->view('home-gallery');
//		if(!empty($_GET["action"])){
//		
//			if($_GET["action"]=="home"){
//				$data['regionId'] = $this->usersModel->getRegionList();
//				$this->load->view('regionBody', $data);
//			}
//			if($_GET["action"]=="details"){
//				$result = $this->usersModel->getCharList($_GET['regionId']);
//				$this->load->view('charByRegion', $result);
//			}
//			if($_GET["action"]=="login"){
//			//	$view->getView("views/loginForm.php");
//				header("location: userMain.php");
//			}
//		}
//			else {
//				$data['regionId'] = $this->usersModel->getRegionList();
//				$this->load->view('regionBody', $data);
//		}
		
		$this->load->view('footer');
		
	}
}
?>	
	<!--<div class="main-content" id="home-gallery">
		<div class="row">
			<div class="large-4 columns">
				<figure>		
					<a href="detail.html">
						<img src="public/images/sh-thumb-293x293.png" alt="a P-38 laying down fire" />
					</a>
				</figure>
				<h1>
					<a href="detail.html">Steel Hawks</a>
				</h1>
				<p>High-flying fun over the Pacific!</p>
			</div>
			<div class="large-4 columns">
				<figure>
					<a href="">
						<img src="public/images/fake-thumb-293x293.png" alt="Fake Block - the geometric puzzler" />
					</a>
				</figure>
				<h1>
					<a href="">Fake Block</a>
				</h1>
				<p>Beat your friends or beat the clock, but look out for Fake Block.</p>
			</div>
			<div class="large-4 columns">
				<figure>
					<a href="">
						<img src="public/images/pp-thumb-293x293.png" alt="an 8-bit-looking skull" />
					</a>
				</figure>
				<h1>
					<a href="">Pirate Poker</a>
				</h1>
				<p>Think you can bluff a pirate?</p>
			</div>	
		</div>-->
		
		
	<!--</div>
	<footer>
		<ul id="social-media">
			<li><a href=""><img src="assets/images/fb-29x29.png" alt="Facebook Logo" /></a></li>
			<li><a href=""><img src="assets/images/twitter-29x33.png" alt="Twitter Logo" /></a></li>
			<li><a href=""><img src="assets/images/li-29x29.png" alt="LinkedIn Logo" /></a></li>
		</ul>
		<ul>
			<li><p>&copy;OhmieMandi 2013</p></li>
		</ul>
	</footer>
</div>
	<script src="assets/js/vendor/custom.modernizr.js"></script>
	<script src="assets/js/vendor/jquery.js" type="text/javascript"></script>
	<script src="assets/js/foundation.min.js"></script> 
	<script> 
		$(document).foundation();
	</script> 

</body>
</html>-->