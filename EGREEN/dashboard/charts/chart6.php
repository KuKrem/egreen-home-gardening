 <?php 
include('../../inc/dbconnection.php');
$getroleamount=mysqli_query($conn, "SELECT role_id,COUNT(role_id) AS count FROM users WHERE role_id=3 OR role_id=6 OR role_id=9 OR role_id=10 OR role_id=12 OR role_id=13 OR role_id=15 OR role_id=16 GROUP BY role_id");
while($row=mysqli_fetch_array($getroleamount)){
  $dataset1[]=array(
    $row['role_id'],
    $row['count']);
}

 ?>
<!DOCTYPE HTML>
<html>
<head>  
  <script type="text/javascript">



  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        // text: "A Multi-series Column Chart"
      
      },

      var data = <?php echo json_encode($dataset1); ?>;

      // paste tha code between these
      // paste tha code between these

    });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="js/canvasjs.min.js"></script>
</head>


<body>
  <div id="chartContainer" style="height: 200px; width: 290px;">
  </div>
</body>
</html>