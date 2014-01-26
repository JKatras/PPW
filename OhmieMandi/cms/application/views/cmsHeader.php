<!--<?php ob_start();?>-->
<!DOCTYPE html> <!--[if IE 9]<html class="lt-ie10" lang="en" ><![endif]--> 
<html class="no-js" lang="en" > 
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Content Management</title> 
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/normalize.css"> 
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/foundation.min.css">
	<!--<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/global.css" />-->
	<!--<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>-->
</head>
<body>
<div id="wrapper">
<!--	<header>
		<h1>
		<?php echo
			"<a href=?action=home>
				<img id='logo' src=".base_url()."public/images/OM_logo_purple_70x70.png alt='OhmieMandi Logo' />
				<img id='logo-tag' src=".base_url()."public/images/OM-tag.png alt='OhmieMandi' />
			</a>"
		?>
		</h1>
		<nav>
			<ul>
				<li>
					<h1>
					<!--allows for dropdown links to show on hover--*>
					<a class="<?php if($this->uri->uri_string()=="?action=home"){echo "active";}?>" href="?action=home" data-dropdown=nav-hover data-options=is_hover:true>
						Games
					</a>
					<ul id=nav-hover class=f-dropdown data-dropdown-content>		
				<?php
				foreach ($gameId as $g => $row) {
				echo "
						<li>
							<h2>
								<a href=?action=detail&gameId=${row['gameId']}>
									${row['name']}
								</a>
							</h2>
						</li>";
				}	?>
								
					</ul>
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
			</li>
		</ul>
	</nav>
</header>-->