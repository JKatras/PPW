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
		<h1><a href="<?php echo base_url(); ?>"><strong>Ohmie</strong>Mandi</a></h1>
		<nav>
			<ul>
				<li <?php if ($currentPage == 'games') { echo 'class="current"'; } ?> >
					<!--allows for dropdown links to show on hover-->
					<a href="<?php echo base_url(); ?>videos" data-dropdown=nav-hover data-options=is_hover:true>
						Games
					</a>
					
					<ul id=nav-hover class=f-dropdown data-dropdown-content>		
					<?php
					foreach ($gameId as $g => $row) {
					echo "
						<li>
							<a href=detail/${row['gameId']}>
								${row['name']}
							</a>
						</li>";
					}?>		
					</ul>
				</li>
					
				<li <?php if ($currentPage == 'videos') { echo 'class="current"'; } ?> ><a href="<?php echo base_url(); ?>videos">Videos</a></li>
				<li <?php if ($currentPage == 'contact') { echo 'class="current"'; } ?> ><a href="<?php echo base_url(); ?>contact">Contact</a></h1>
			</li>
		</ul>
	</nav>
</header>