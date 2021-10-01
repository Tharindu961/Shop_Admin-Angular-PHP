<?php 
	
	require_once('dbconnection.php');


 ?>

 <?php 
 	session_start();
 	//echo $_SESSION['name'];
 	
 	if(isset($_POST['submit'])){
 		$name = $_POST['name'];
        $shop_name = $_POST['shop_name'];
 		$email = $_POST['email'];
 		$password = $_POST['password'];
 		
 		//create query
 		$query = "INSERT INTO students (name,shop_name,email,password) VALUES ('{$name}','{$shop_name}','{$email}','{$password}')";
 		//execute query
 		$result = mysqli_query($connect,$query);
 			//redirect page
 		if($result){
 			header('Location: log.php');
 		}else{
 			echo "wrong Combinations";
 		}
 	}


  ?>