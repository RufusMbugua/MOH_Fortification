<!--    -->
<!--
This is the template page. It is the root view in which all other mini views are loaded.

-->

<?php
ob_start();
$sessionEmail = $this -> session -> userdata('email');
$accessLevel = $this -> session -> userdata('userRights');
$vehicle = $this -> session -> userdata('vehicle');
$affiliation = $this -> session -> userdata('affiliation');
?>
<html>
	<head>
		<title><?php echo $title; ?></title>
		<?php $this -> load -> view('sections/head'); ?>
	</head>
	<body>

		<header>
			<?php $this -> load -> view('sections/header'); ?>
			
			<?php
			if($page=="Front-End"){
			?>
			<nav id="pageheader" >
				
				
	<section class="links">
		<ul>
			<a href="<?php echo base_url().'c_front/vehicles' ?>">Forms</a>
			<a href="<?php echo base_url().'c_charts/index' ?>">Reports</a>
		</ul>
	</section>
						
				
</nav>

<nav id="specific">
	<div style="float:left" class="user">Welcome</div>
	<ul class="links">
	<a>Notifications</a>
	<a>Messages</a>
	<a href="<?php echo base_url().'c_auth/logout'?>">Logout</a>
</ul>
</nav>
		</header>

		<section class="current-body">
			<nav id="admin">
	
</nav>
			<?php 
			if($content=="Vehicles"){
				?>
			<section class="menu-container">
	<?php #if($affiliation !="KEBS" || $affiliation !="MOPHS" ){
									 switch($vehicle){ case "Salt":
	?>
	<section class="menu salt">
		<section class="top">
			<h2>Salt</h2>
			<div title="click to expand" class="max salt">
				+
			</div>
			<div title="click to minimize" class="min salt" style="display:none">
				-
			</div>
		</section>
		<ul>
			<?php if($accessLevel==2){
			?>
			<li>
			<a id = "internalFort_A1_li" class="salt-url">Fortified Salt-Table A-1</a>
			</li>
			<li>
			<a id="externalFort_B1_li" class="salt-url">Fortified Salt - Audits and Inspection - Table B-1</a>
			</li>
			<li>
			<a id="externalFort_B2_li" class="salt-url">Fortified Salt - Audits and Inspection - Table B-2</a>
			</li>
			<li>
			<a id="externalFort_B3_li" class="salt-url">Fortified Salt - Audits and Inspection - Table B-3</a>
			</li>
			<li>
			<a id="externalIod_B1_li" class="salt-url">Iodized Salt - Audits and Inspection - Table B-1</a>
			</li>
			<?php }else if($accessLevel==3 || $accessLevel==4){ ?>
			<li>
				<a id = "internalFort_A2_li" class="salt-url">Fortified Salt QC/QA -Table A-2</a>

			</li>
			<li>
			<a id="internalFort_B1_li" class="salt-url">Fortified Salt QC/QA -Table B-1</a>
			</li>
			<li>
			<a id="internalFort_B2_li" class="salt-url">Salt Fortification: Table B-2</a>
			</li>
			<li>
			<a id="internalFort_C1_li" class="salt-url">Fortified Salt QC/QA -Table C-1</a>
			</li>
			<li>
			<a id="smallScale_A1_li" class="salt-url">Fortified Salt - QA In Small Scale Operations - Table A-1</a>
			</li>
			<li>
			<a id="smallScale_A2_li" class="salt-url">Fortified Salt - QA In Small Scale Operations - Table A-2</a>
			</li>
			<?php } ?>
		</ul>
	</section><!-- End of Menu: Salt Forms -->
	<?php
	break;
	case "Oil":
	?>
	<section class="menu oil">
		<section class="top">
			<h2>Oil</h2>
			<div title="click to expand" class="max oil">
				+
			</div>
			<div title="click to minimize" class="min oil" style="display:none">
				-
			</div>
		</section>
		<ul>
			<li>
				<a id="fortifiedOil_A1_li" class="oil-url">Fortified Oil-Table A-1</a>
			</li>
			<li>
				<a id="fortifiedOil_B1_li" class="oil-url">Fortified Oil-Table B-1</a>
			</li>
			<li>
				<a id="fortifiedOil_B2_li" class="oil-url">Fortified Oil-Table B-2</a>
			</li>
			<li>
				<a id="fortifiedOil_C1_li" class="oil-url">Fortified Oil-Table C-1</a>
			</li>
		</ul>
	</section><!-- End of Menu: Oil Forms -->
	<?php
	break;
	case "Sugar":
	?>

	<section class="menu sugar">
		<section class="top">
			<h2>Sugar</h2>
			<div title="click to expand" class="max sugar">
				+
			</div>
			<div title="click to minimize" class="min sugar" style="display:none">
				-
			</div>
		</section>
		<ul>
			<li>
				<a id="internalSugar_A1_li" class="sugar-url">Internal Fortified Sugar-Table A-1</a>
			</li>
			<li>
				<a id="internalSugar_A2_li" class="sugar-url">Internal Fortified Sugar-Table A-2</a>
			</li>
			<li>
				<a id="internalSugar_A3_li" class="sugar-url">Internal Fortified Sugar-Table A-3</a>
			</li>
			<li>
				<a id="internalSugar_B1_li" class="sugar-url">Internal Fortified Sugar-Table B-1</a>
			</li>
			<li>
				<a id="internalSugar_C1_li" class="sugar-url">Internal Fortified Sugar-Table C-1</a>
			</li>
			<li>
				<a id="internalSugar_C2_li" class="sugar-url">Internal Fortified Sugar-Table C-2</a>
			</li>
			<li>
				<a id="internalSugar_C3_li" class="sugar-url">Internal Fortified Sugar-Table C-3</a>
			</li>
			<li>
				<a id="internalSugar_D1_li" class="sugar-url">Internal Fortified Sugar-Table D-1</a>
			</li>
			<li>
				<a id="externalSugar_B1_li" class="sugar-url">External Fortified Sugar-Table B-1</a>
			</li>
			<li>
				<a id="externalSugar_B2_li" class="sugar-url">External Fortified Sugar-Table B-2</a>
			</li>
			<li>
				<a id="externalSugar_B3_li" class="sugar-url">External Fortified Sugar-Table B-3</a>
			</li>
			<li>
				<a id="qualityAssurance_A1_li" class="sugar-url">Quality Assurance-Table A-1</a>
			</li>
			<li>
				<a id="qualityAssurance_B1_li" class="sugar-url">Quality Assurance-Table B-1</a>
			</li>
			<li>
				<a id="qualityAssurance_B2_li" class="sugar-url">Quality Assurance-Table B-2</a>
			</li>
			<li>
				<a id="qualityAssurance_C1_li" class="sugar-url">Quality Assurance-Table C-1</a>
			</li>
		</ul>
	</section><!-- End of Menu: Sugar Forms -->
	<?php
	break;
	case "Maize":
	?>
	<section class="menu maize">
		<section class="top">
			<h2>Maize</h2>
			<div title="click to expand" class="max maize">
				+
			</div>
			<div title="click to minimize" class="min maize" style="display:none">
				-
			</div>
		</section>
		<ul>
			<li>
				<a id="internalMaizeFlour_A1_li" class="maize-url">Internal Fortified Maize-Table A-1</a>
			</li>
			<li>
				<a id="internalMaizeFlour_A2_li" class="maize-url">Internal Fortified Maize-Table A-2</a>
			</li>
			<li>
				<a id="internalMaizeFlour_B1_li" class="maize-url">Internal Fortified Maize-Table B-1</a>
			</li>
			<li>
				<a id="internalMaizeFlour_B2_li" class="maize-url">Internal Fortified Maize-Table B-2</a>
			</li>
			<li>
				<a id="internalMaizeFlour_C1_li" class="maize-url">Internal Fortified Maize-Table C-1</a>
			</li>
			<li>
				<a id="externalMaizeFlour_B1_li" class="maize-url">External Fortified Maize-Table B-1</a>
			<li>
				<a id="externalMaizeFlour_B2_li" class="maize-url">External Fortified Maize-Table B-2</a>
			</li>
			<li>
				<a id="externalMaizeFlour_B3_li" class="maize-url">External Fortified Maize-Table B-3</a>
			</li>
		</ul>
	</section><!-- End of Menu: Maize Forms -->

	<?php
	break;
	case "Wheat":
	?>

	<section class="menu wheat">
		<section class="top">
			<h2>Wheat</h2>
			<div title="click to expand" class="max wheat">
				+
			</div>
			<div title="click to minimize" class="min wheat" style="display:none">
				-
			</div>
		</section>
		<ul>
			<li>
				<a id="internalWheatFlour_A1_li" class="wheat-url">Internal Fortified Wheat-Table A-1</a>
			</li>
			<li>
				<a id="internalWheatFlour_A2_li" class="wheat-url">Internal Fortified Wheat-Table A-2</a>
			</li>
			<li>
				<a id="internalWheatFlour_B1_li" class="wheat-url">Internal Fortified Wheat-Table B-1</a>
			</li>
			<li>
				<a id="internalWheatFlour_B2_li" class="wheat-url">Internal Fortified Wheat-Table B-2</a>
			</li>
			<li>
				<a id="internalWheatFlour_C1_li" class="wheat-url">Internal Fortified Wheat-Table C-1</a>
			</li>
			<li>
				<a id="externalWheatFlour_B1_li" class="wheat-url">External Fortified Wheat-Table B-1</a>
			</li>
			<li>
				<a id="externalWheatFlour_B2_li" class="wheat-url">External Fortified Wheat-Table B-2</a>
			</li>
			<li>
				<a id="externalWheatFlour_B3_li" class="wheat-url">External Fortified Wheat-Table B-3</a>
			</li>
		</ul>
	</section><!-- End of Menu: Wheat Forms -->
	<?php
	break;
	case "N/A":
	$this->load->view('menu');
	break;}
	?>
</section><!-- End of Menu-Container -->

			<section class="form-container">
				<?php
				echo $form;
				?>
			</section><!-- End of Form-Container Section-->
		
		<section class="form-sidebar">
			<h3>Actions</h3>
			<section class="buttons">
				<a title="To Save entered info" id="submit_form_data" class="awesome blue medium">Submit</a>
				<a title="To close the form." id="close_opened_form" class="awesome red medium">Close</a>
				<a title="To get PDF version of the form."  class="awesome green medium">PDF</a>
			</section>
		</section><!-- End of Form-SideBar -->
		<?php
		}

		if($content=="Reports"){
			?>
			<script>
	

  $(function () {

        $('#container').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Stacked bar chart'
            },
            xAxis: {
               categories: <?php echo $seriesdata[0]?>

                },

            yAxis: {
                min: 0,
                title: {
                    text: 'Total fruit consumption'
                }
            },
            legend: {
                backgroundColor: '#FFFFFF',
                reversed: true
            },
            plotOptions: {
                series: {
                    stacking: 'normal'
                }
            },

                 series: <?php echo $seriesdata[1]; ?>
					});
					});

	</script>
			<section class="menu-container">
				
			</section>
			
			<section class="form-container">
				<?php
				echo $form;
				?>
			</section><!-- End of Form-Container Section-->
			
			<?php


			}
			if($content=='datatable'){
	?>
	<section class="form-container">
		<table id="datatables" class="display">
		<thead>
			<tr>
				<th>sugar_externalfortB3ID</th>
				<th>factoryName</th>
				<th>dates</th>
				<th>suggestionsForImprovement</th>
				<th>affiliation</th>

			</tr>
			</thead>

                            <?php
                        foreach ($table as $value) { ?>
<tr>
    
<td><?php echo $value['sugar_externalfortB3ID']; ?></td>
<td><?php echo $value['factoryName']; ?></td>
<td><?php echo $value['dates']; ?></td>
<td><?php echo $value['suggestionsForImprovement']; ?></td>
<td><?php echo $value['supervisorName']; ?></td>
</tr>

    <?php } ?>
</table>
		
	</section>
	<?php
	}

			?>
			
		</section>
		
		<?php
		}
		if($page=="Login"){
		?>
		<section class="message">
			<?php echo $form; ?>
		</section>
		<section class="login">
			<section class="form-title">
				<section class="title-text">
					Sign In
				</section>
			</section>
			<form class="form-login" method="post" accept-charset="utf-8">

				<input name="username" type="text" placeholder="Username / Email Address"/>
				<p></p>
				<input  name="secret" type="password" placeholder="Password"/>
				<p></p>
				<button type="submit" class="awesome myblue large" formaction="<?php echo base_url().'c_auth/login'?>" />
				Login</button>
			</form>
		</section>
		<?php

		}
	?>
		
	</body>
	<!--
	End of Body
	-->
</html>