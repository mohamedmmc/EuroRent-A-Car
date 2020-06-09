<?php include("dbconfig.php"); ?>
<?php

 $a="SELECT COUNT(*), coupon.mail, user.email 
FROM coupon 
INNER JOIN user ON coupon.mail=user.email 
WHERE user.rolee = 'client'
GROUP BY coupon.mail, user.email ";
 $rs = $conn->query($a);
 while($rws = $rs->fetch_assoc()){ $m=$rws['COUNT(*)'];}
$b="SELECT COUNT(*)
FROM user 
WHERE user.rolee = 'client'
 ";
 $rss = $conn->query($b);
 while($rws1 = $rss->fetch_assoc()){ $q=$rws1['COUNT(*)'];}
$dataPoints = array(
	array("label"=> " clients n ayan pas un coupon", "y"=> $q-$m),
	array("label"=> "clients ayant un coupon", "y"=> $m),
	
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "pourcentage des clients ayant un coupon"
	},
	subtitles: [{
		text: "eurorent acar"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              