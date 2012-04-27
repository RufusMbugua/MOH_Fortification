<html>
	<head>
		<link href="<?php echo base_url();?>css/layout.css" rel="stylesheet" type="text/css" />
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/form.css"/>
		<!-- Attach JavaScript files -->
		<script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.orbit.js" type="text/javascript"></script>
	</head>
	<body>
		<section class="message">
			<?php echo $form;?>
		</section>
		<section class="login">
			<form class="form-login" method="post">
				<input name="username" type="email" placeholder="Username / Email Address"/>
				<p></p>
				<input  name="secret" type="password" placeholder="Password"/>
				<p></p>
				<button type="submit" class="awesome myblue large" formaction="<?php echo base_url().'auth/login'?>" />
				Login</button> <!--button type="submit" class="awesome myblue large" formaction="<?php echo base_url().'index.php/'.'front/vehicles'?>" />Login</button-->
			</form>
		</section>
	</body>
</html>