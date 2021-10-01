<?php 

	require_once('dbconnection.php');
?>

<?php 
		if(isset($_POST['submit'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$query = "SELECT * FROM students WHERE email ='{$email}' AND password = '{$password}'";
			//run  query
			if($result = mysqli_query($connect,$query))
                {
                    $rows = array();
                    while($row = mysqli_fetch_assoc($result))
                    {
                    $rows[] = $row;
                    }
                    echo json_encode($rows);
                    }
                    else
                    {
                    http_response_code(404);
                    }
			//numberv of rows
			//  if(mysqli_num_rows($result) == 1){
			//  	header('Location: home.php');
			//  }else{
			//  	echo "<script>window.alert('email and password combination wrong')</script>";
			//  }

			

		}


 ?>