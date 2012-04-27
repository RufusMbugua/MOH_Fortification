<?php
ob_start();
/* Check Authority / User Level
 * Where:
 * 1. Administrator  =>  HIGHEST
 * 2. Supervisor
 * 3. Inspector      =>  LOWEST
 */
 /*
  $userRights = $this -> session -> userdata('useRights');	
 function checkLevel(){

 $userLevel = '';
switch ($this -> userRights) {
	case 1 :
		$this -> userLevel = 'Administrator';
		break;
	case 2 :
		$this -> userLevel = 'SuperVisor';
		break;
	case 3 :
		$this -> userLevel = 'Inspector';
		break;
	
}	
return $this -> userLevel;
}
  * */
  
?>

<html>
	<head>
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url()?>css/backend-layout.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/awesomebuttons.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/buttons.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/orbit.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/reveal.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/post.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/tabs.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/form.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/form-layout.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/fonts.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/mobiscroll-1.6.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/inline.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>css/jquery-ui-1.8.18.custom.css" />
		<!-- Attach JavaScript files -->
		<script src="<?php echo base_url()?>js/jquery-1.7.2.min.js"
		type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/mobiscroll-1.6.min.js"
		type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.orbit.js"
		type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js"
		type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.validate.js"
		type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/testing.js"
		type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.cloneform.js"
		type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.reveal.js"
		type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/modernizr.js"
		type="text/javascript"></script>
	</head>
	<body>
		<header>
			<section class="initial">
				ACP |
			</section>
			<section
			class="title">
				Admin Control Panel
			</section>
		</header>
		<!--  Beginning of Container Section -->
		<section class="container">
			<nav>
				<!--
				If you want to use a class just add the following to the anchor()
				array('class' => 'awesome large') -->
				<?php echo anchor('#', 'Home'); ?>
			</nav>
			<!-- Beginning of Right Sidebar
			Contents:
			1. Search Form :
			a. Search Field
			2. User Details => Session

			-->
			<!-- Beginning of content -->
			<section class="content">
				<section class="menu-container-2">
					<section class="menu">
						<h2>View Data</h2>
					</section>
					<section class="menu">
						<h2>Analytics</h2>
					</section>

				</section>
				<section class="center">

				</section>
			</section>

			<section class="right-sidebar">
				<!-- Beginning of User Section -->
				<section
				class="user">
					Signed in as: <?php echo anchor('#','More')
					?>
					<p>User Level: <?php //echo checkLevel();  ?></p>
				</section>
				<!-- Beginning of form -->
				<form class="search">
					<!-- Search Field -->
					<input type="search" placeholder="Search" />
				</form>
				<!-- End of form -->
			</section><!-- End of Right Sidebar -->
		</section>
		<!-- End of Container -->
	</body>

</html>
