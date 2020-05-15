<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Flot Examples: Categories</title>
	<link href="css/examples.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../excanvas.min.js"></script><![endif]-->
	<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.categories.js"></script>
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.axislabels.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.canvas.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.stack.min.js"></script> -->

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
	<script language="javascript" type="text/javascript" src="js/jquery.flot.time.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.axislabels.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.selection.js"></script>
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
    $(function () {
      var dataset1 = <?php echo json_encode($dataset1); ?>;
        
      $.plot($("#placeholder"), [{

      	xaxes:'bottom',
				yaxes:'left',

    		data: dataset1,
    
      	bars: {
      	 	show: true,
					barWidth: 0.8,
					align: "center",
					steps: true
					// ticks: 16
      	}

      }]);

   //    var plot = $.plot("#placeholder", data, {
			// 	xaxes: [
			// 		{ position: 'bottom' },
			// 		{ position: 'bottom'},
			// 		{ position: 'top'}
			// 	],
			// 	yaxes: [
			// 		{ position: 'left' },
			// 		{ position: 'left' },
			// 		{ position: 'right' },
			// 		{ position: 'left' },
			// 		{ position: 'right' }
			// 	]
			// });
    
    });
    </script>
</head>
<body>

	<div id="header">
		<h2>Categories</h2>
	</div>

	<div id="content">

		<div class="demo-container">
			<div id="placeholder" class="demo-placeholder"></div>
		</div>

		

	</div>

	

</body>
</html>





