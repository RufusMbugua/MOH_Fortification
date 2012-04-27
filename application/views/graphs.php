<?php?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="<?php echo base_url();?>js/highcharts.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>js/highcharts.src.js" type="text/javascript"></script>
		<script src="http://code.highcharts.com/modules/exporting.js"></script>
		<script type="text/javascript">
		$(function() {
    var chartdata = [["192.0.1.2", 30], ["192.0.1.5", 14], ["3.6.7", 5],["192.0.1.2", 8], ["192.0.1.5", 5], ["3.6.7", 37],["192.0.1.2", 13], ["192.0.1.5", 54], ["3.6.7", 5]];
    var chartdata2 = [["192.0.1.2", 10], ["192.0.1.5", 42], ["3.6.7", 15],["192.0.1.2", 70], ["192.0.1.5", 42], ["3.6.7", 25],["192.0.1.2", 51], ["192.0.1.5", 42], ["3.6.7", 95]];
    var chart = new Highcharts.Chart({
        chart: {

            renderTo: 'container',
            type: 'line'

        },
        title: {

            text: 'Access Log',

            x: -20 //center
        },

        subtitle: {

            text: 'Source:DailyChart',

            x: -20

        },
		
		xAxis: {
            categories: ['192.0.1.2', '192.0.1.5', '3.6.7'],
            minPadding: 1,
            maxPadding: 1,
            title: {
                text: 'IP Addresses'
            }
           
        },

        yAxis: {
            minPadding: 1,
            maxPadding: 1,
            title: {
                text: 'COUNT'
            }
        },

            
        series: [{
                 name:"Login Rate",
            data:chartdata2,  type:'column'
        },{
        name:"Logout Rate",
            data:chartdata,  type:'line'
        }],
		exporting: {
            enabled: true
        }
    });
});
		</script>
		<script type="text/javascript"></script>
		<link rel='stylesheet' type='text/css' href='/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.css' />
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url();?>css/form.css"/>
		<!-- Attach JavaScript files -->
		<script src="<?php echo base_url();?>js/jquery-1.5.1.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>js/jquery.orbit.js" type="text/javascript"></script>

		<script src="<?php echo base_url();?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

	</body>
</html>