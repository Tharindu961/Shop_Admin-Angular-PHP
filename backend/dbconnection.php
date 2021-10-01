<?php 
	
	$dbhost = 'localhost';
	$dbuser ='root';
	$dbpass = '';
	$dbname = 'shopnew';

	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(mysqli_connect_errno()){
		die('database connect failed'.mysqli_connect_error());

	}else{
		//echo 'connect sucessfully';
	}
	 

?>