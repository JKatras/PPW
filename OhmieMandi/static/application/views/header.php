<?php ob_start();?>
<!DOCTYPE html> <!--[if IE 9]<html class="lt-ie10" lang="en" ><![endif]--> 
<html class="no-js" lang="en" > 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>OhmieMandi</title> 
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/normalize.css"> 
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/foundation.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/global.css" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wrapper">
	<header>
		<h1>
			<a href="index.html">
				<img id="logo" src="<?php echo base_url(); ?>public/images/OM_logo_purple_70x70.png" alt="OhmieMandi Logo" />
				<img id="logo-tag" src="<?php echo base_url(); ?>public/images/OM-tag.png" alt="OhmieMandi" />
			</a>
		</h1>
		<nav>
			<ul>
			<?php
			echo
				"<li class='active'>
					<h1>
						<a href=?action=home>Games</a>
					</h1>
				</li>
				
				<li>
					<h1>
						<a href=?action=videos>Videos</a>
					</h1>
				</li>
				
				<li>
					<h1>
						<a href=?action=contact>Contact</a>
					</h1>
				</li>"
				?>
			</ul>
		</nav>
	</header>