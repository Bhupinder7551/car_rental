<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
<div>
			
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
				
					
                    <div class="header">
                    <a href="#default" class="logo">Bhupinder Auto Car Rental</a>
                   <div class="header-right">
                   <a href="index.php">Home</a>
						<a href="index.php">Rent Cars</a>
						<a href="index_.php">Download File</a>
						<a href="expense.php">Expense</a>
						<a href="#">Contact</a>
						
					<a class="login" href="account.php">Client Login</a>
					<a class="login" href="login.php">Admin Login</a>
                        </div>
                       </div>
					<?php
						} else{
					?>
							
							<div class="header">
                    <a href="#default" class="logo">Bhupinder Auto Car Rental</a>
                   <div class="header-right">
                   <a href="index.php">Home</a>
				   <a href="status.php">View Status</a>				
						<a href="index_.php">Download File</a>
				   <a href="message_admin.php">Message Admin</a>
				   
				   <a href="admin/logout.php">Logout</a>   
					<a href="" style="color:limegreen;"><?php echo $_SESSION['email']; ?></a>
                        </div>
					   </div>
						
					<?php
						}
					?>
			
			</div>
		</header>