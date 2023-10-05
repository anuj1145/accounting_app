<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST');

$conn = mysqli_connect('localhost', 'root', '', 'my_account');

$data= json_decode(file_get_contents("php://input"),true);

$cust_id=$data['cust_id'];
$quantity=$data['quantity'];
$pro_name=$data['pro_name'];
$price=$data['price'];
$pro_desc=$data['pro_desc'];


//$sql="insert into product (cos_name, mobile, village, cos_address) values ('{$user_name}','{$user_mob}','{$user_city}','{$user_add}')";

$sql_pro="insert into product (cust_id,quantity,pro_name,pro_price,pro_desc)values('$cust_id','$quantity','$pro_name','$price','$pro_desc')";
$insert_entry="insert into entery (cos_id,item,price,item_desc)values('$cust_id','$pro_name','$price','$pro_desc')";
// $run_products = mysqli_query($con, $insert_products);
$run_entry = mysqli_query($conn, $insert_entry);

if( mysqli_query($conn,$sql_pro))
{
    echo json_encode(array("message"=>"Your product added successfully","status"=>true));
}
else
{
    echo json_encode(array("message"=>"Not added","status"=>false));
}

?>