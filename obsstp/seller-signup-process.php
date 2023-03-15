<?php include_once "header.php"; ?>



<main>
    <section>
    <?php include_once "nav.php"; ?>
    </section>
    <section>
<?php include 'config.php';
//signup process

 ?>

<?php
if(isset($_POST['signup']))
{
//register now	
	
	 $data = $_POST;
	
	if (empty($data['name']) ||
    empty($data['password']) ||
    empty($data['userid']) ||
    empty($data['retypePassword'])) 
{
    
    die('Please fill all required fields!');
}

	
if ($data['password'] !== $data['retypePassword']) 
{
   die('Password and Confirm password should match!');   
}


	
	
	 $name = $_POST['name'];
	
		 $userid = $_POST['userid'];
		 	 $password = $_POST['password'];
			 	 $retypepassword = $_POST['retypePassword'];
                  $address = $_POST['address'];
                  $phoneNo = $_POST['phoneNo'];
                  $status = "active";
	

		

		
		$query="INSERT INTO `sellers`(`userid`, `address`, `name`, `phone`, `status`, `password`) VALUES('$userid','$address','$name','$phoneNo','$status','$password')";
	
	$insert = mysqli_query($con,$query);
	
 
 
 echo '<h2> User is registered  successfully </h2>';

	
	
}

?>
</section>
</main>

<?php include_once "footer.php"; ?>
</body>
</html>
