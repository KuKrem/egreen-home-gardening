<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Bar Chart</title>
    <!-- <script src="/js/lib/jquery-1.8.3.min.js" type='text/javascript'></script>   -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/js/flot/excanvas.min.js"></script><![endif]-->
     
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>    
    <script type="text/javascript" src="js/jquery.flot.min.js"></script>    
    <script type="text/javascript" src="js/jquery.flot.symbol.js"></script>
    <script type="text/javascript" src="js/jquery.flot.axislabels.js"></script>
    <script type="text/javascript" src="js/jquery.flot.time.js"></script>    
    <script type="text/javascript" src="js/jshashtable-2.1.js"></script>    
    <script type="text/javascript" src="js/jquery.numberformatter-1.2.3.min.js"></script>

    <?php 
include('../../inc/dbconnection.php');
$getroleamount=mysqli_query($conn, "SELECT role_id,COUNT(role_id) AS count FROM users WHERE role_id=5 OR role_id=8 OR role_id=10 OR role_id=11 OR role_id=13 OR role_id=14 OR role_id=15 OR role_id=16 GROUP BY role_id");
while($row=mysqli_fetch_array($getroleamount)){
  $dataset1[]=array(
    $row['role_id'],
    $row['count']);
}

 ?>
     
    <script type="text/javascript">
        //******* 2012 Average Temperature - BAR CHART
        // var data = [[0, 11],[1, 15],[2, 25],[3, 24],[4, 13],[5, 18]];
        var data = <?php echo json_encode($dataset1); ?>;
        var dataset = [{ label: "Helpers in each role id", data: data, color: "#52B640" }];
        // var ticks = [[0, "London"], [1, "New York"], [2, "New Delhi"], [3, "Taipei"],[4, "Beijing"], [5, "Sydney"]];
        // var ticks = [[0, "0"], [1, "5"], [2, "8"], [3, "10"], [4, "11"],[5, "13"], [6, "14"], [7, "15"], [8, "16"]];
          var ticks = [[0, "0"], [1, "-"], [2, "-"], [3, "-"], [4, "-"],[5, "5"], [6, "-"], [7, "-"], [8, "8"], [9, "-"], [10, "10"], [11, "11"], [12, "-"], [13, "13"], [14, "14"], [15, "15"], [16, "16"]];
 
        var options = {
            series: {
                bars: {
                    show: true
                }
            },
            bars: {
                align: "center",
                barWidth: 0.6
            },
            xaxis: {
                axisLabel: "Role ID",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10,
                ticks: ticks
            },
            yaxis: {
                axisLabel: "Amount",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 3,
                // ticks: ticks,
                tickFormatter: function (v, axis) {
                    return v + "";
                }
            },
            legend: {
                noColumns: 0,
                labelBoxBorderColor: "#000000",
                position: "nw"
            },
            grid: {
                hoverable: true,
                borderWidth: 2,
                backgroundColor: { colors: ["#ffffff", "#EDF5FF"] }
            }
        };
 
        $(document).ready(function () {
            $.plot($("#flot-placeholder"), dataset, options);
            $("#flot-placeholder").UseTooltip();
        });
 
        function gd(year, month, day) {
            return new Date(year, month, day).getTime();
        }
 
        var previousPoint = null, previousLabel = null;
 
        $.fn.UseTooltip = function () {
            $(this).bind("plothover", function (event, pos, item) {
                if (item) {
                    if ((previousLabel != item.series.label) || (previousPoint != item.dataIndex)) {
                        previousPoint = item.dataIndex;
                        previousLabel = item.series.label;
                        $("#tooltip").remove();
 
                        var x = item.datapoint[0];
                        var y = item.datapoint[1];
 
                        var color = item.series.color;
 
                        //console.log(item.series.xaxis.ticks[x].label);                
 
                        showTooltip(item.pageX,
                        item.pageY,
                        color,
                        "<strong> " + item.series.label + " </strong><br> Role ID " + item.series.xaxis.ticks[x].label + " : Amount <strong>" + y + "</strong>");
                    }
                } else {
                    $("#tooltip").remove();
                    previousPoint = null;
                }
            });
        };
 
        function showTooltip(x, y, color, contents) {
            $('<div id="tooltip">' + contents + '</div>').css({
                position: 'absolute',
                display: 'none',
                top: y - 40,
                left: x - 120,
                border: '2px solid ' + color,
                padding: '3px',
                'font-size': '9px',
                'border-radius': '5px',
                'background-color': '#fff',
                'font-family': 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
                opacity: 0.9
            }).appendTo("body").fadeIn(200);
        }
    </script>
</head>
<body>
    <div id="flot-placeholder" style="height: 200px; width: 290px;"></div>
    <!-- <div style="width:850px;height:350px;text-align:center;margin:10px">        
        <div id="flot-placeholder" style="width:100%;height:100%;"></div>        
    </div> -->
</body>
</html>