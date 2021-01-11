
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
 <link rel="stylesheet" type="text/css" href="css/reset.css"> 
	<!-- <link rel="stylesheet" type="text/css" href="css/responsive.css">  -->
	<link rel="stylesheet" type="text/css" href="css/css.css">
	
	
		<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	
</head>
<style>
.latest-tag{
    background-color: #df1d1d;
    box-shadow: 0 0 3px 2px rgba(150, 60, 43);
    height: 71px;
    right: 2px;
    position: absolute;
    top: -16px;
    width: 24px;
    -webkit-transform: rotate(-45deg);
    z-index: 1;
}
	.latest-tag span{
	color: #fff;
   left: -9px;
    top: 30px;
    position: absolute;
    width: 40px;
    transform: rotate(90deg); font-weight: normal;
	}
	.listings ul.properties_list li{
		margin-right:20px;
		margin-top:20px
	}
	.sort_menu {
    float: right;
    border: 3px solid grey;
    padding: 10px;
	margin-right:50px;
}
.sort_menu a {
    margin-right: 10px;
	text-decoration: none;
	font-size: 16px;
}
.sort_menu a:hover {
    color:black;	
}
input[type=text] {
  width: 230px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  margin-left:50px;
}



</style>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
			 <?php
				include 'includes/config.php';
				$activeuser=$_SESSION['email'];
			$qy = "SELECT * FROM client WHERE email= '$activeuser'";
			$log = mysqli_query($conn,$qy);
		
			$row = mysqli_fetch_assoc($log);
			session_start();
			$_SESSION['email'] = $row['email'];
			$_SESSION['pass'] = $row['id_no'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['location'] = $row['location'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['status'] = $row['status'];
			
		
			?> 
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
					
			</section>
		<div class="sort_menu">
	
		<a href='index.php?orderByASC'>Short By ASC</a>|
		<a href='index.php?orderByDESC'>Short By DESC</a>|
		<a href='index.php?Price'>Price low to high</a>|
		<a href='index.php?Price_'>Price high to low</a>|
	
		</div>

		
<form action="index.php" method="post" >
  <input type="text" placeholder="Enter Car name"  name="car_name" >
</form>

			
	</section><!--  end hero section  -->

	<section class="listings">
		<div class="wrapper">
	
			<ul class="properties_list">
		
			<?php
						include 'includes/config.php';
						 if(isset($_GET['orderByDESC'])){
							$sql = "SELECT * FROM cars  WHERE status = 'Available'  ORDER BY car_name DESC";
						}
						elseif(isset($_GET['Price'])){
							$sql = "SELECT * FROM cars  WHERE status = 'Available'  ORDER BY hire_cost";
				
						}	elseif(isset($_GET['Price_'])){
							$sql = "SELECT * FROM cars  WHERE status = 'Available'  ORDER BY hire_cost DESC";
				
						}
						elseif(isset($_POST['car_name'])){
							$c_name=$_POST['car_name'];
							
							$sql = "SELECT * FROM cars  WHERE status = 'Available' && car_name  LIKE '%$c_name%'  ";
						}		
							
							
						
						else{
							$sql = "SELECT * FROM cars  WHERE status = 'Available'  ORDER BY car_name";
				
						}
					
						$rs = mysqli_query($conn,$sql);
						while($rws = mysqli_fetch_assoc($rs)){
			?>
				
				<li>
				<?php 
				 $orgDate =$rws[date] ;  
				 $Date_in_year = date("Y", strtotime($orgDate));			
				 $Date_in_month = date("m", strtotime($orgDate));
								if($Date_in_year  == date("Y")):
									if($Date_in_month == date("m")):
										echo '<div class="latest-tag"><span>Latest</span></div>';
									endif;
								endif;
							?>
			
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="350" height="200">
					</a>
				
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo $rws['car_name']?></a>
						</h1>
						<h2>Car type/Model: <span class="property_size"><?php echo $rws['car_type']?> / <?php echo $rws['model']?></span></h2>
					<h2><?php echo '$.'.$rws['hire_cost'];?></h2>
					
		
					</div>
				
				
		
						</li>


			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->


	<footer>
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