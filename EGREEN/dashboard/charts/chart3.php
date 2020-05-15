<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Flot Examples: Categories</title>
	<link href="css/examples.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
	<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.categories.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.axislabels.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.canvas.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.stack.min.js"></script> -->

	<!-- <script language="javascript" type="text/javascript" src="js/jquery.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.canvaswrapper.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.colorhelpers.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.saturated.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.browser.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.drawSeries.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.errorbars.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.uiConstants.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.logaxis.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.symbol.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.flatdata.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.navigate.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.fillbetween.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.stack.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.touchNavigate.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.hover.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.touch.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.time.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.axislabels.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.selection.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.composeImages.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.legend.js"></script> -->

	<?php 
include('../../inc/dbconnection.php');
$getroleamount=mysqli_query($conn, "SELECT COUNT(role_id) AS role,role_id FROM users GROUP BY role_id");
while($row=mysqli_fetch_array($getroleamount)){
	$dataset1[]=array(
		$row['role_id'],
		$row['role']);
}

 ?>

	<script type="text/javascript">

	$(function() {

		function generate(start, end, fn) {
			var res = [];
			for (var i = 0; i <= 40; ++i) {
				var x = start + i / 40 * (end - start);
				res.push([x, fn(x)]);
			}
			return res;
		}

		var data = [
			{ 
				data: <?php echo json_encode($dataset1); ?>,
				xaxis: 1, 
				yaxis:1, 
				bars: { show: true, fill: true }
			},


			{ 
				data: generate(0, 10, function (x) { 
					return Math.sin(x);
				}), 
				xaxis: 1, 
				yaxis:2, 
				points: { show: true }
			},


			{ 
				data: generate(0, 10, function (x) { 
					return (x < 3 || x > 5) ? Math.cos(x) : null;
				}), 
				xaxis: 1, 
				yaxis:3 
			},


			{ 
				data: generate(2, 10, function (x) { 
					return Math.tan(x);
				}), 
				xaxis: 2, 
				yaxis: 4, 
				lines: { show: true, steps: true }
			},


			{ 
				data: generate(5, 15, function (x) { 
					return 30 * Math.sin(x/2+3);
				}), 
				xaxis: 3, 
				yaxis: 5, 
				bars: {show: true, fill: true, barWidth:0.05, align: "center"}
			}
		];

		var plot = $.plot("#placeholder", data, {
			xaxes: [
				{ position: 'bottom' },
				{ position: 'bottom'},
				{ position: 'top'}
			],
			yaxes: [
				{ position: 'left' },
				{ position: 'left' },
				{ position: 'right' },
				{ position: 'left' },
				{ position: 'right' }
			]
		});

		// Create a div for each axis

		$.each(plot.getAxes(), function (i, axis) {
			if (!axis.show)
				return;

			var box = axis.box;

			$("<div class='axisTarget' style='position:absolute; left:" + box.left + "px; top:" + box.top + "px; width:" + box.width +  "px; height:" + box.height + "px'></div>")
				.data("axis.direction", axis.direction)
				.data("axis.n", axis.n)
				.css({ backgroundColor: "#f00", opacity: 0, cursor: "pointer" })
				.appendTo(plot.getPlaceholder())
				.hover(
					function () { $(this).css({ opacity: 0.20 }) },
					function () { $(this).css({ opacity: 0.1 }) }
				)
				.click(function () {
					$("#click").text("You clicked the " + axis.direction + axis.n + "axis!")
				});
		});

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
</head>
<body>

	<div id="header">
		<h2>Interacting with axes</h2>
	</div>

	<div id="content">

		<div class="demo-container">
			<div id="placeholder" class="demo-placeholder"></div>
		</div>

		<p>With multiple axes, you sometimes need to interact with them. A simple way to do this is to draw the plot, deduce the axis placements and insert a couple of divs on top to catch events.</p>

		<p>Try clicking an axis.</p>

		<p id="click"></p>

	</div>

	<div id="footer">
		Copyright &copy; 2007 - 2014 IOLA and Ole Laursen
	</div>


</body>
</html>





