<nav id="pageheader" >
	<section class="search">
		<form>
			<input type="search" placeholder="Search Here" />
		</form>
	</section>
				
				
	<section class="links">
		<ul>
			<a class="current" href="<?php echo base_url().'c_front/vehicles' ?>">Vehicles</a>
			<a href="<?php echo base_url().'c_front/reports' ?>">Reports</a>
		</ul>
	</section>
						
						
	<section class="right-side-nav" style="width:20%">
		
			<section class="sessionUser"><?php echo 'Welcome  '.$sessionEmail ?></section>
		    <section style="float:right"><?php echo anchor(base_url().'c_auth/logout','Logout') ?></section>
	
	</section>
				
</nav>