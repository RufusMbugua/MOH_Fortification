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
		<link rel="stylesheet" href="<?php echo base_url()?>css/cascade.css" />
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
		<script type="text/javascript">
			// Place all JavaScript code here
			$(document).ready(function() {
			$("section.logo").delay(2500).animate({
			top:'50px'
			});
			$(".close").click(function() {
			$('.menu-secondary').hide('drop fast');
			});
			
			$(".statement").delay(3500).show(0);
			$("#showFancyModal").click(function() {
			$("#profile-fancy").addClass("show");
			return false;
			});
			$("#closeFancy").click(function() {
			$("#profile-fancy").removeClass("show");
			return false;
			});
			
			var choice
			$("button").click(function(event) {
			$('.menu-secondary').show('drop slow');
			choice=event.target.id;
			if(choice=='one') {
			$('.menu-secondary-contents2').hide();
			$('.menu-secondary-contents').delay(2000).show();
			}
			if(choice=='two') {
			$('.menu-secondary-contents').hide();
			$('.menu-secondary-contents2').delay(2000).show();
			}
			});
			
			
			
			});
		</script>
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
				<?php echo anchor('#','Home'); ?>
				<!-- Beginning of form -->
				<form class="search">
					<!-- Search Field -->
					<input type="search" placeholder="Search" />
				</form>
				<!-- End of form -->
			</nav>
			<!-- Beginning of Right Sidebar
			Contents:
			1. Search Form :
			a. Search Field
			2. User Details => Session

			-->
			<!-- Beginning of content -->
			<section class="content">
				<section class="menu-main">
					<button class="awesome blue" id="one" name="test">
						Vehicles
					</button>
					<button class="awesome blue" id="two" name="test">
						Open2
					</button>

				</section>
				<section class="menu-secondary" style="display: none">
					<a class="close">&#215;</a>
					<section class="menu-secondary-contents" style="display: none">
						<button class="awesome" id="test2">
							Salt
						</button>
						<button class="awesome" id="test2">
							Oil
						</button>
						<button class="awesome" id="test2">
							Sugar
						</button>
						<button class="awesome" id="test2">
							Wheat
						</button>
					</section>
					<section class="menu-secondary-contents2" style="display: none">
						<button class="awesome" id="test3">
							Another Close
						</button>
						
					</section>

				</section>

			</section>

			<section class="right-sidebar">
				<!-- Beginning of User Section -->
				<section
				class="user">
					Signed in as: <?php echo anchor('#','More')
					?>
					<p>
						User Level: <?php //echo checkLevel(); ?>
					</p>
				</section>

			</section><!-- End of Right Sidebar -->
		</section>
		<!-- End of Container -->
		<footer></footer>
	</body>

</html>
