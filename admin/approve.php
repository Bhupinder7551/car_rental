<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Approved' WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
		alert(\"Request has Successfully been Approved\");
		window.location = (\"client_requests.php\")
		</script>";
	?>
		<meta content="4; client_requests.php" http-equiv="refresh" />
	<?php
	}
?>
