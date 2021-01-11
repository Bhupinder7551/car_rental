
		
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
		<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	
</head>
<style>
    button.btn.btn-warning {
    width: 100%;
    margin:0 0 10px 0;
}    button.btn.btn-danger {
    width: 100%;    
    margin:0 0 10px 0;
}
button.btn.btn-success {
    width: 100%;    
    margin:0 0 10px 0;
}
button.btn.btn-info{
    width:350px;
}
input[type="text"] {
    width: 205px;
}
.button{background-color: #F08600 !important;
    padding-top: 4px;
    padding-bottom: 4px;
    border-radius: 9px;
    border: 1px solid #F08600;
}
label {
    display: inline-block;
    margin: 10px 20px 0 0;
    border: 2px solid grey;
    padding: 5px 10px 5px 5px;
}
.listings_ {
    padding: 40px 0;
}

</style>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
			 <?php
		if(isset($_POST["submit"])){
			$bhupinder=$_POST["bhupinder"];
			$rajdeep=$_POST["rajdeep"];
			$karan=$_POST["karan"];
			$sharry=$_POST["sharry"];
			$harjeet=$_POST["harjeet"];
        }
			?> 
				<h2 class="caption" style="text-align: center">Expense Tracker</h2>
				<h3 class="properties" style="text-align: center">created by Bhupinder Singh Sandhu</h3>
					
			</section>
	
		

			
	</section><!--  end hero section  -->

	<section class="listings_">
		<div class="wrapper">
            
  <form action="expense.php" method="post" >
  <input type="text"  placeholder="Enter Bhupinder total value"  name="bhupinder" >
  <input type="text"  placeholder="Enter Rajdeep total value" name="rajdeep" >
  <input type="text"  placeholder="Enter Sharry total value"  name="sharry" >
  <input type="text"  placeholder="Enter Karan total value"   name="karan" >
  <input type="text" placeholder="Enter Harjeet total value"  name="harjeet" >
  <input type="submit" value="Enter"  class="button" name="submit" >
</form>    
    <form action="" method="" >
  <label >Bhupinder=$<?php echo $bhupinder ?> </label>
  <label >Rajdeep=$<?php echo $rajdeep ?> </label>
  <label >Sharry=$<?php echo $sharry ?> </label>
  <label >Karan=$<?php echo $karan ?> </label>
  <label >Harjeet=$<?php echo $harjeet ?> </label>
 
</form>


  <?php 
  //$bhupinder_arr=array_sum($bhupinder);
  $sum=$bhupinder+$rajdeep+$karan+$harjeet+$sharry;
 

  $divdeval=$sum/5;
  $k=$karan-$divdeval;
  $b=$bhupinder-$divdeval;
  $r=$rajdeep-$divdeval;
  $h=$harjeet-$divdeval;
  $s=$sharry-$divdeval;
  
  ?>
			  <div class="container p-3 my-3 bg-dark text-white">
  <h1 style="color:white; text-align:center">Total Payments $<?php echo $sum ?> </h1>
</div><!--endcontainer p-3-->

<button style="float:right" type="button" class="btn btn-info">Divide by 5 = $<?php echo $sum/5 ?></button>
<div style="margin-top:80px"class="row">
<div class="col">
<div  class="media border p-3">   
    <div class="media-body">
      <h4>Bhupinder:$<?php echo $b ?> </h4>    
</div>
</div> 
</div>
<div class="col">
<div  class="media border p-3">   
    <div class="media-body">
      <h4>Rajdeep:$<?php echo $r ?> </h4>    
</div>
</div>
 </div> 
 <div class="col">
<div  class="media border p-3">   
    <div class="media-body">
      <h4>Sharry:$<?php echo $s ?> </h4>    
</div>
</div></div>
<div class="col">
<div  class="media border p-3">   
    <div class="media-body">
      <h4>Karan:$<?php echo $k ?> </h4>    
</div>
</div> </div> 

<div class="col">
<div  class="media border p-3">   
    <div class="media-body">
      <h4>Harjeet:$<?php echo $h ?> </h4>    
</div>
</div> </div> 

</div>

<?php
if($k > 0){
    echo ("<br>  <button type='button' class='btn btn-success'>karan = $k</button>");
  }
  elseif($k < 0){
    echo ("<br><button type='button' class='btn btn-danger'>Karan to ___= $k</button>");
  }
  else{
    echo ("<br><button type='button' class='btn btn-warning'>Karan no need to pay anything</button>");
  } 

  if($s > 0){
    echo (" <br> <button type='button' class='btn btn-success'>Sharry = $s</button>");
  }
  elseif($s < 0){ 
      echo ("<br><button type='button' class='btn btn-danger'>Sharry to ___= $s </button>");
  }
  else{
    echo ("<br><button type='button' class='btn btn-warning'>Sharry no need to pay anything</button>");
  }  


  if($b > 0){    
    echo (" <br> <button type='button' class='btn btn-success'>Bhupinder = $b</button>");
}
elseif($b < 0){ 
     echo ("<br><button type='button' class='btn btn-danger'>Bhupinder to ___= $b </button>");
}
else{
  echo "<br><button type='button' class='btn btn-warning'>Bhupinder no need to pay anything</button>";
}

if($r > 0){    
    echo (" <br> <button type='button' class='btn btn-success'>Rajdeep = $r</button>");
}
elseif($r < 0){ 
     echo ("<br><button type='button' class='btn btn-danger'>Rajdeep to ___= $r </button>");
}
else{
  echo "<br><button type='button' class='btn btn-warning'>Rajdeep no need to pay anything</button>";
}

if($h > 0){    
  echo (" <br> <button type='button' class='btn btn-success'>Harjeet = $h</button>");
}
elseif($h < 0){ 
   echo ("<br><button type='button' class='btn btn-danger'>Harjeet to ___= $h </button>");
}
else{
echo "<br><button type='button' class='btn btn-warning'>Harjeet no need to pay anything</button>";
}

//testing
if($h > 0){    
  echo (" <br> <button type='button' class='btn btn-success'>Harjeet = $h</button>");
}
elseif($h < 0){ 
   echo ("<br><button type='button' class='btn btn-danger'>Harjeet to ___= $h </button>");
}
else{
echo "<br><button type='button' class='btn btn-warning'>Harjeet no need to pay anything</button>";
}
?>

<p><input type="button" class="button" onclick="window.print()" value="Print Here" /></p>
        </div>

	</section>	<!--  end listing section  -->

