<?php
include_once("dbconnection.php");
$postdata = file_get_contents("php://input");
if(isset($postdata) && !empty($postdata))
{
$request = json_decode($postdata);

$sql = "INSERT INTO shopowner(name,shop_name,password,email) VALUES ('$name','$shopname','$pwd','$email')";
if ($mysqli->query($sql) === TRUE) {
$authdata = [
    'name' => $name,
    'pwd' => '',
    'shopname' => $shopname,
    'email' => $email,
    'Id' => mysqli_insert_id($mysqli)
];
echo json_encode($authdata);
}
}

?>