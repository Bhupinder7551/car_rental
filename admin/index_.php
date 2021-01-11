
			
		
			
		
		<?php
				include '../includes/config.php';
if(isset($_POST['submit_name'])!=""){
  $name=$_FILES['photo_name']['name'];
  $size=$_FILES['photo_name']['size'];
  $type=$_FILES['photo_name']['type'];
  $temp=$_FILES['photo_name']['tmp_name'];
  $caption1=$_POST['caption'];
  $link=$_POST['link'];
  move_uploaded_file($temp,"upload/".$name);
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
</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<style>
</style>
<body>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h1><p>Upload  And  Download Files</p></h1>	
		<br />
		<br />
			<form enctype="multipart/form-data" action="" name="form" method="post">
				Select File
					<input type="file" name="photo_name" id="photo" /></td>
					<input type="submit" name="submit_name" id="submit" value="Submit" />
			</form>
		<br />
		<br />
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Files</th>
					<th align="center">Action</th>	
				</tr>
			</thead>
		
				
				<?php
				include '../includes/config.php';
			$qy = "SELECT * FROM upload order by id desc";
			$log = mysqli_query($conn,$qy);
			
			while($row = mysqli_fetch_assoc($log)){
	?>
		
			
			<tr>
			
				<td>
					&nbsp;<?php echo $row['name'] ;?>
				</td>
				<td>
					<button class="alert-success"><a href="download.php?filename=<?php echo $row['name'];?>">Download</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
</body>
</html>