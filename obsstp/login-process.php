<?php include 'config.php'; ?>

<?php
if(isset($_POST['login']))
{
	$userType=$_POST["userType"];
	$userid = $_POST['userid'];
	$password = $_POST['password'];
		if($userType=="buyar")
		{
	
			$query="SELECT * FROM  `buyars` where  `userid`= '$userid' and  `password`='$password' ";
	
	 		$result = mysqli_query($con, $query);
            	if ($result->num_rows > 0) 
					{
						session_start();
						$_SESSION['userid'] =$userid;
						header('Location:'.'buyar_Account.php');
				
					}
				else{
				
				echo"Wrong user id or password";
					}
		}
		if($userType=="seller")
		{
	
			$query="SELECT * FROM  `sellers` where  `userid`= '$userid' and  `password`='$password' ";
	
	 		$result = mysqli_query($con, $query);
            	if ($result->num_rows > 0) 
					{
						session_start();
						$_SESSION['userid'] =$userid;
						header('Location:'.'Seller_Account.php');
				
					}
				else{
				
				echo"Wrong user id or password";
					}
		}
	
}



?>