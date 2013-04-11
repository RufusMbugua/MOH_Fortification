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