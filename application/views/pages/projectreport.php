<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<style>
.label-style
{
	font-size:11px;
	color: #3c3e40!important;
}
.timer {
    font-size: 46px;
    text-align: center;
    display: inline-block;
    color: #555;
    font-weight: 300;
}
.canvasjs-chart-credit
{
	display: none !important; 
}
</style>
<body class="bg-light">
	<div class="container bg-white mb-5">
	    <div class="row mt-4">
	    	<div class="col-sm-7">
	    		<div class="card shadow p-3 mt-4">
		            <div class="row">
						<div class="col-sm-12">
						   <h6 class="font-weight-bold ">Projects Reports</h6>
						</div>
					</div>
			        <div class="line"></div>
					<div class="row p-1">
					    <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
					</div>
			    </div>   
	    	</div>
	        <div class="col-sm-5">
		        <div class="card shadow p-3 mt-4">
		            <div class="row">
						<div class="col-sm-12">
						   <h6 class="font-weight-bold">Total Projects Time Spent</h6>
						</div>
					</div>
			        <div class="line"></div>
					<div class="row p-5 m-auto">
					    <div class="col-md-12  text-center">
					        <h1 class="timer">0:0:0</h1>
					    </div>
						<div class="col-md-12  text-center">
						   <h6 class="label-style">Hours &nbsp; Minutes &nbsp; Seconds</h6>	
	                    </div>					   
					</div>
			    </div> 
	        </div>
	    </div>
	    <div class="row mt-2">
	    	<div class="col-sm-12">
	    		<div class="card shadow p-3 mt-4">
		            <div class="row">
						<div class="col-sm-12">
						   <h6 class="font-weight-bold ">Project Assignment</h6>
						</div>
					</div>
			        <div class="line"></div>
					<div class="row p-3">
					  <!--  <div id="chartContainer1" style="height: 370px; width: 100%;"></div> -->
					</div>
			    </div>   
	    	</div>
	    </div>
    </div>


<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer2", {
	theme: "light2",
	animationEnabled: true,
	
	data: [{
		type: "pie",
		indexLabelFontSize: 18,
		radius: 80,
		indexLabel: "{label} - {y}",
		yValueFormatString: "###0.0\"%\"",
		click: explodePie,
		dataPoints: [
			{ y: 65,  },
			{ y: 9, },
			{ y: 26,  }
		]
	}]
});
chart.render();

function explodePie(e) {
	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
		if(i !== e.dataPointIndex)
			e.dataSeries.dataPoints[i].exploded = false;
	}
}
 
var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: "MMbbl = one million barrels",
		dataPoints: [      
			{ y: 300878, label: "Venezuela" },
			{ y: 266455,  label: "Saudi" },
			{ y: 169709,  label: "Canada" },
			{ y: 158400,  label: "Iran" },
			{ y: 142503,  label: "Iraq" },
			{ y: 101500, label: "Kuwait" },
			{ y: 97800,  label: "UAE" },
			{ y: 80000,  label: "Russia" }
		]
	}]
});
chart.render();

function explodePie(e) {
	for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
		if(i !== e.dataPointIndex)
			e.dataSeries.dataPoints[i].exploded = false;
	}
}
 
}
</script>
