<html>
	<head>
		<link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/form.css"/>
		<!-- Attach JavaScript files -->
		<script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.orbit.js" type="text/javascript"></script>
	</head>
	<body>
		<section class="banner">
			<section class="logo">
				<img src="<?php echo base_url(); ?>images/coat_of_arms-resized.png" />

			</section>
			<section class="credentials">
				<section class="title">
					Ministry Of Public Health and Sanitation
				</section>
				<section class="subtitle">
					Department of Family Health<p></p>
				</section>
				<section class="division">
					Division of Nutrition<p></p><p></p>
				</section>
			</section>
			<section class="date">
				
				 <?php echo date("l F d, Y"); ?>
			</section>
		</section>

		<section class="message">
			<?php echo $form; ?>
		</section>
		<section class="login">
			<form class="form-login" method="post" accept-charset="utf-8">

			<form class="form-login" method="post">
				<input name="username" type="text" placeholder="Username / Email Address"/>
				<p></p>
				<input  name="secret" type="password" placeholder="Password"/>
				<p></p>
				<button type="submit" class="awesome myblue large" formaction="<?php echo base_url().'c_auth/login'?>" />
				Login</button>
			</form>
		</section>
	</body>
</html>