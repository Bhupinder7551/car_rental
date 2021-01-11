<?php
				include './includes/config.php';
if(isset($_POST['submit_name'])!=""){
  $name=$_FILES['photo_name']['name'];
  $size=$_FILES['photo_name']['size'];
  $type=$_FILES['photo_name']['type'];
  $temp=$_FILES['photo_name']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"./admin/upload/".$name);
//$query=$conn->query("insert into upload(name)values('$name')");

$qry = "INSERT INTO upload (name)VALUES('$name')";
							$result = mysqli_query($conn,$qry);

if($result){
header("location:index_.php");
}
else{
die(mysql_error());
}
}
?>

<html>
<head>
<title>Upload and Download Files</title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/reset.css"> 
	<!-- <link rel="stylesheet" type="text/css" href="css/responsive.css">  -->
	<link rel="stylesheet" type="text/css" href="css/css.css">
</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

	<style>
.button {
  background-color: antiquewhite;;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}.button a {
 
  color: black;
  text-decoration: none;

}
</style>
<body>
<section class="">
<?php
			include 'header.php';
		?>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h1><p>Download Files</p></h1>	
	
	
		<br />
		<br />
	
		
			
			<?php
				include './includes/config.php';
			$qy = "SELECT * FROM upload order by id desc";
			$log = mysqli_query($conn,$qy);
			
			while($row = mysqli_fetch_assoc($log)){

		
			
			
		
			?> 
			
					<button class="button"><a href="./admin/download.php?filename=<?php echo $row['name']?>">Download <u><?php echo $row['name']?></u> file</a></button><br>
			<?php }?>
		
	</div>
	</div>
	</div>
	</section>
</body>
</html>

<footer style="margin-top:300px">
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OTHERS</li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li>OUR CAR TYPES</li>
						<li><a href="#">Mercedes</a></li>
						<li><a href="#">Range Rover</a></li>
						<li><a href="#">Landcruisers</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>

				<?php include_once "includes/footer.php"; ?>