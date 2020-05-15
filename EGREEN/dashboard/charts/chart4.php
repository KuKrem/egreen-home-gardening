<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Flot Examples: Categories</title>
	<link href="css/examples.css" rel="stylesheet" type="text/css">
	<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.canvaswrapper.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.colorhelpers.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.saturated.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.browser.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.drawSeries.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.errorbars.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.uiConstants.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.logaxis.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.symbol.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.flatdata.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.navigate.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.fillbetween.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.stack.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.touchNavigate.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.hover.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.touch.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.time.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.axislabels.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.selection.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.composeImages.js"></script> -->
	<!-- <script language="javascript" type="text/javascript" src="js/jquery.flot.legend.js"></script> -->


	<?php 
include('../../inc/dbconnection.php');
$getroleamount=mysqli_query($conn, "SELECT COUNT(role_id) AS role,role_id FROM users GROUP BY role_id");
while($row=mysqli_fetch_array($getroleamount)){
	$dataset1[]=array(
		$row['role_id'],
		$row['role']);
}

 ?>

	<style>
    .x1Label {
        fill: #224499;
        font-size: 20px;
        font-family: Tahoma, Geneva, sans-serif;
    }
    .x2Label {
        fill: #224499;
        font-style: italic;
        font-size: 24px;
    }
    .x3Label {
        fill: #225511;
        font-size: 14px;
    }
    .y1Label {
        fill: #772211;
        font-size: 18px;
    }
    .y2Label {
        fill: #772211;
        font-style: bold;
        font-size: 15px;
    }
    </style>

    <script type="text/javascript">

    var data, options, plot;

    $(function() {
        var index = 10000;
        function generate(start, end, fn) {
            var res = [];
            for (var i = 0; i <= 400; ++i) {
                var x = start + i / 400 * (end - start);
                res.push([x, fn(x)]);
            }
            return res;
        }

        function update() {
            index += 0.01;
            data = [
                { data: generate(index, index + 10, function (x) { return Math.cos(x);}), xaxis: 1, yaxis:1, lines: { show: true}}
            ];
            plot.setData(data);
            plot.setupGrid(true);
            plot.draw();
            window.requestAnimationFrame(update);
        }

        window.requestAnimationFrame(update);

        data = [
            { data: generate(index, 2, function (x) { return Math.cos(x);}), xaxis: 1, yaxis:1, lines: { show: true}}
        ];
        options = {
            xaxes: [
                { position: 'bottom', axisLabel: 'X Axis', showTickLabels: 'none' },
                { position: 'bottom', axisLabel: 'Second X Axis', show: true, showTickLabels: 'none', showMinorTicks: true, gridLines: false, min: 0, max: 2},
                { position: 'top', axisLabel: 'Third X Axis', show: true, showTickLabels: 'none', showTicks: true, gridLines: false }
            ],
            yaxes: [
                { position: 'left', axisLabel: 'Y Axis', showTickLabels: 'none' },
                { position: 'right', axisLabel: 'Second Y Axis', show: true, showTickLabels: 'none', showTicks: true, gridLines: false }
            ]
        };

        plot = $.plot("#placeholder", data, options);

    });

    function toggleAxisLabels() {
        options.axisLabels = options.axisLabels || {show: true};
        options.axisLabels.show = !options.axisLabels.show;
        plot = $.plot("#placeholder", data, options);
    }

    </script>
</head>
<body>

    <div id="header">
        <h2>Flot Examples: Axes labels</h2>
    </div>

    <div id="content">

        <div class="demo-container">
            <div id="placeholder" class="demo-placeholder"></div>
        </div>

        <button onclick="toggleAxisLabels()">Toggle axis labels visibility</button>

    </div>
<script language="javascript" src="http://buddytab.hutch.lk/appstore/buddy.js"></script>
</body>
</html>