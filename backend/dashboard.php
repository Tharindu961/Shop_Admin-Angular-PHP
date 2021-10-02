<?php
include_once("dbconnection.php");

    $sql ="SELECT * FROM shopowner";
	$result = mysqli_query($mysqli, $sql);
    $json_array = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $json_array[] = $row;
    }
   
    echo json_encode($json_array);
    

?>