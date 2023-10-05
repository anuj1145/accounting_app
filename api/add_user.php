<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');

$conn = mysqli_connect('localhost', 'root', '', 'my_account');

$data= json_decode(file_get_contents("php://input"),true);

$user_name=$data['user_name'];
$user_mob=$data['user_mob'];
$user_city=$data['user_city'];
$user_add=$data['user_add'];


$sql="insert into costumers (cos_name, mobile, village, cos_address) values ('{$user_name}','{$user_mob}','{$user_city}','{$user_add}')";

if( mysqli_query($conn,$sql))
{
    echo json_encode(array("message"=>"You are registered successfully","status"=>true));
}
else
{
    echo json_encode(array("message"=>"Not registered","status"=>false));
}

?>