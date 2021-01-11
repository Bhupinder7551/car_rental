<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">projectworlds</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="#">Help</a>
				<span>|</span>
				<a href="#">Profile Settings</a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">

								
							
			<ul>
			<?php
		
		
		include '../includes/config.php';
		$result = mysqli_query($conn,"SELECT COUNT(*) AS `count` FROM `message` WHERE status='Unread'");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
?>
<?php		
include '../includes/config.php';
$result = mysqli_query($conn,"SELECT  COUNT(car_id) AS `count` FROM `client` WHERE status='Pending'");
$row = mysqli_fetch_assoc($result);
$count_Pendinghire = $row['count'];
?>

<?php		
include '../includes/config.php';
$result = mysqli_query($conn,"SELECT COUNT(*) AS `count` FROM `cars` WHERE status='Available'");
$row = mysqli_fetch_assoc($result);
$count_car = $row['count'];
?>
			    <li><a href="index.php"><span>Dashboard</span></a></li>
			    <li><a href="add_vehicles.php"><span>Vehicle Management(<?php echo $count_car?>)</span></a></li>
				<?php if($count_Pendinghire>='1')
				{ 
				echo"<li><a href='client_requests.php'><span style='color: red;'>Hire Requests( $count_Pendinghire)</span></a></li>";
				}else{
				echo"<li><a href='client_requests.php'><span>Hire Requests</span></a></li>";
				}
				?>
				<?php if($count>='1')
				{ 
					echo "<li><a href='index.php'><span style='color: red;'>Messages({$count})</span></a></li>";
				}else{
				
					echo "<li><a href='index.php'><span>Messages</span></a></li>";
			
				}
				 ?>
			    
			    <li><a href="#"><span>Services Control</span></a></li>   
			    <li><a href="index_.php"><span>Upload File</span></a></li>
			</ul>
		</div>