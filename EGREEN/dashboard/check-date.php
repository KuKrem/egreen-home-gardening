<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>

<?php
	include('../inc/dbconnection.php');
	$getdate="SELECT last_logged_date FROM users WHERE user_id=1";
	$modalqry = mysqli_query($conn, $getdate);
	while ($result = mysqli_fetch_array($modalqry)) {
		$last_ld=$result['last_logged_date'];
		$arr = explode(" ", $last_ld);
		$date = array_shift($arr);
		echo $date."-Last logged Date <br/>";


		// $date = date('Y-m-d', strtotime ($last_ld));
		// echo date_format($last_ld, 'd/m/y');
		// echo $last_ld;
	}

	$getdate_jour="SELECT start_date FROM journals WHERE user_id=1 AND crop_id=1";
	$modalqry2 = mysqli_query($conn, $getdate_jour);
	while ($result = mysqli_fetch_array($modalqry2)) {
		$last_ld2=$result['start_date'];
		$arr1 = explode(" ", $last_ld2);
		$date1 = array_shift($arr1);
		echo $date1."-Journal Started Date<br/>";


		// $date = date('Y-m-d', strtotime ($last_ld));
		// echo date_format($last_ld, 'd/m/y');
		// echo $last_ld;
	}

	// $dat1=date_create($date);
	// $dat2=date_create($date1);
	// $diff=date_diff($dat1,$dat2);
	// $interval = date_diff($date, $date1);
	// echo $interval;
	// echo $diff;

	$dte1=date_create("$date");
$dte2=date_create("$date1");
$diff=date_diff($dte1,$dte2);
$dif= $diff->format("%a");
$act_dif=$dif+1;
echo $dif."-Day Difference<br/>";
echo $act_dif;

$getentries="SELECT TE.description, TE.image, J.journal_id, J.journal_name, J.start_date, C.cropname, TE.day_no
FROM journals J, crops C, timelines T, timeline_entries TE
WHERE J.crop_id=C.crop_id AND C.crop_id=T.crop_id AND T.timeline_id=TE.timeline_id AND TE.day_no<=16 ORDER BY TE.day_no DESC";

$modalqry3 = mysqli_query($conn, $getentries);
	// while ($result = mysqli_fetch_array($modalqry3)) {
		// $decript=$result['description'];
		// $image=$result['image'];
		?>

		<table>
			<thead>
				<tr>
					<td></td>
					<td></td>
				</tr>
			</thead>
			<tbody>
				<?php while ($result = mysqli_fetch_array($modalqry3)) {
					$decript=$result['description'];
					$image=$result['image'];
				?>
				<tr>
					<td><?php echo $decript; ?></td>
					<td><img src="<?php echo $image; ?>" alt="Image of entries" width=80px></td>
				</tr>
			<?php	} ?>
			</tbody>
		</table>


		<!-- // $date = date('Y-m-d', strtotime ($last_ld));
		// echo date_format($last_ld, 'd/m/y');
		// echo $last_ld; -->


</body>
</html>