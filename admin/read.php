<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
       
        $query = "UPDATE message SET status = 'Read' WHERE msg_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Message Successfully read\");
					window.location = (\"index.php\")
				</script>";
	}
?>
