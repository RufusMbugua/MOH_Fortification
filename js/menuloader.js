$(document).ready(function() {

	function saltMax() {
		$(".max.salt").hide('fast');
		$(".min.salt").show('fast');
		$(".menu.salt").animate({
			height : '100%'
		});
		$(".menu.oil").hide();
		$(".menu.maize").hide();
		$(".menu.wheat").hide();
		$(".menu.sugar").hide();
	}

	function saltMin() {
		$(".min.salt").hide('fast');
		$(".max.salt").delay(450).show('fast');
		$(".menu.salt").animate({
			height : '25px'
		},100);
		$(".menu.oil").show('fast');
		$(".menu.maize").show('fast');
		$(".menu.wheat").show('fast');
		$(".menu.sugar").show('fast');
	}

	function oilMax() {
		$(".max.oil").hide('fast');
		$(".min.oil").show('fast');
		$(".menu.oil").animate({
			height : '100%'
		});
		$(".menu.salt").hide();
		$(".menu.maize").hide();
		$(".menu.wheat").hide();
		$(".menu.sugar").hide();
	}

	function oilMin() {
		$(".min.oil").hide('fast');
		$(".max.oil").delay(450).show('fast');
		$(".menu.oil").animate({
			height : '25px'
		},100);
		$(".menu.salt").show('fast');
		$(".menu.maize").show('fast');
		$(".menu.wheat").show('fast');
		$(".menu.sugar").show('fast');
	}

	function sugarMax() {
		$(".max.sugar").hide('fast');
		$(".min.sugar").show('fast');
		$(".menu.sugar").animate({
			height : '100%'
		},100);
		$(".menu.oil").hide();
		$(".menu.maize").hide();
		$(".menu.wheat").hide();
		$(".menu.salt").hide();
	}

	function sugarMin() {
		$(".min.sugar").hide('fast');
		$(".max.sugar").delay(450).show('fast');
		$(".menu.sugar").animate({
			height : '25px'
		});
		$(".menu.oil").show('fast');
		$(".menu.maize").show('fast');
		$(".menu.wheat").show('fast');
		$(".menu.salt").show('fast');
	}

	function maizeMax() {
		$(".max.maize").hide('fast');
		$(".min.maize").show('fast');
		$(".menu.maize").animate({
			height : '100%'
		},100);
		$(".menu.oil").hide();
		$(".menu.salt").hide();
		$(".menu.wheat").hide();
		$(".menu.sugar").hide();
	}

	function maizeMin() {
		$(".min.maize").hide('fast');
		$(".max.maize").delay(450).show('fast');
		$(".menu.maize").animate({
			height : '25px'
		});
		$(".menu.oil").show('fast');
		$(".menu.salt").show('fast');
		$(".menu.wheat").show('fast');
		$(".menu.sugar").show('fast');
	}

	function wheatMax() {
		$(".max.wheat").hide('fast');
		$(".min.wheat").show('fast');
		$(".menu.wheat").animate({
			height : '100%'
		},100);
		$(".menu.oil").hide();
		$(".menu.maize").hide();
		$(".menu.salt").hide();
		$(".menu.sugar").hide();
	}

	function wheatMin() {
		$(".min.wheat").hide('fast');
		$(".max.wheat").delay(450).show('fast');
		$(".menu.wheat").animate({
			height : '25px'
		});
		$(".menu.oil").show('fast');
		$(".menu.maize").show('fast');
		$(".menu.salt").show('fast');
		$(".menu.sugar").show('fast');
	}


	$(".max.salt").click(function() {
		saltMax();
		

	});

	$(".min.salt").click(function() {
		saltMin();
	});
	$(".max.oil").click(function() {
		oilMax();
		

	});

	$(".min.oil").click(function() {
		oilMin();
	});

	$(".max.sugar").click(function() {
		sugarMax();
		

	});
	$(".min.sugar").click(function() {
		sugarMin();

	});

	$(".max.maize").click(function() {
		maizeMax();
		

	});
	$(".min.maize").click(function() {
		maizeMin();
	});

	$(".max.wheat").click(function() {
		wheatMax();
		

	});
	$(".min.wheat").click(function() {
		wheatMin();
	});
	
	

}); 