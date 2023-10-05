
<?php

include("includes/db24.php");

?>
<html>
<head>
<title>Deal24</title>

<style>
.header{
	padding-top:10px;
	padding-left:10px;	
	height:70px;
	width:auto;
	background:#222;
	
}
.navbar{
	padding-top:5px;
	padding-left:50px;
	height:25px;
	width:auto;
	background:#4caf50;
}

.left_content{
	float:left;
	padding:10px;
	margin-top:5px;
	height:480px;
	width:83%;
	background:#fff;
	border:1px solid black;
}
table,td {
	padding:10px;
	border:1px solid black;
	border-collapse: collapse;

}

.right_content{
	float:right;
	margin-top:5px;
	height:500px;
	width:15%;
	background:#fff;
	border:1px solid black;
}
nav  {

    width: 10%;
    background-color: #f1f1f1;
	text-decoration: none;
	text-align:center;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #555;
    color: white;
}
.footer{
	margin-top:5px;
	padding-top:3px;
	float:left;	
	height:30px;
	width:100%;
	background:#222;
}
.footer_text{
	color:#fff;
}
button{
	background: linear-gradient(rgba(206,20,20), rgba(1,4,4));
	border-radius:4px;
	border:none;
	color:#fff;
	font-size:15px;
</style>

</head>
<?php

     $user = $_GET['cos_id'];
		$get_costumers="select*from costumers where cos_id='$user'";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		$row_costumers=mysqli_fetch_array($run_costumers);
			
			
			$cos_id = $row_costumers['cos_id'];
			$cos_name = $row_costumers['cos_name'];
			$cos_mob = $row_costumers['mobile'];
			$cos_add = $row_costumers['cos_address'];
			$cos_village = $row_costumers['village'];
			$date = $row_costumers['date'];
		
		
		
		    $total=0;
			$pro_price="select*from entery WHERE cos_id='$cos_id'";
			$run_pro_price=mysqli_query($con,$pro_price);
			
            
			while($p_price=mysqli_fetch_array($run_pro_price)){
			$amount=array($p_price['price']);
			$values=array_sum($amount);
			$total +=$values;
			}
			
			if($total=='0'){
				$u_status="<img src='images/paid.png' width='40'height='20'>";
			}
			
			  else{
				 $u_status="<img src='images/due.png' width='40'height='20'>";
			      }
			
			
			
			
	     ?> 
 <body>
  <div class="header"><img src="images/logo10.png" height="40" width="120"></div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  
  <div class="left_content">
   <div align="center">
    <form method="post" action="" enctype="multipart/form-data">
    <div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
    Delete Profile Carefully
   </div>
  <table align="center"width="400px"height="300px">
  <tr>
  <td><b>Costumer Id: </b></td>
  <td>  # 
  <?php echo $cos_id;?>
  </td>
  </tr>
    <tr>
  <td><b>Registration Date: </b></td>
  <td> 
  <?php echo $date;?>
  </td>
  </tr>
  <tr>
  <td><b>Name</b></td>
  <td>
 <?php echo $cos_name;?>
  </td>
  </tr>
  <tr>
  <td><b>Contact No.</b></td>
  <td>
<?php echo $cos_mob;?>
  </td>
  </tr>

   <tr>
  <td><b> Address</b></td>
  <td>
<?php echo $cos_add;?>
  </td>
  </tr>
	  <tr>
	  <td><b>Select Village</b></td>
	  <td><?php echo $cos_village;?></td>
  </tr>
    </tr>
	  <tr>
	  <td><b>Total Amount</b></td>
	  <td><?php echo $total;?></td>
  </tr>
    </tr>
	  <tr>
	  <td><b>Status</b></td>
	  <td><?php echo $u_status;?></td>
  </tr>

	
  </table>
    <div align="center"><input type="submit" name="delete" value="delete"style="	background: linear-gradient(rgba(76,175,80,1), rgba(1,4,4));
	border-radius:4px;
	border:none;
	color:#fff;
	font-size:15px;
	margin-top:10px;
"/>
	<button><a href="all_costumer.php"style="text-decoration:none; color:#fff;">Cancel</a></button></div>
  
  </form>
  
 </div>
  </div>
  
  
  </div>
  <div class="right_content">
    <ul>
	   <li><a href="index.php">Dashboard</a></li>
       <li><a href="all_costumer.php">All Customer</a></li>
       <li><a href="#news">News</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
    </ul>
  
  </div>
  <div class="footer"><div align="center" class="footer_text">&copy: copyright 2018 by Deal24</div></div>

 </body>
</html>
<?php 
if(isset($_POST['delete'])){


$u_id = $_GET['cos_id'];


$delete = "delete from costumers where cos_id='$u_id'";

$run_delete = mysqli_query($con, $delete);
  if($run_delete){
	  
	   echo"<script>confirm('Do You Realy Want To Delete')</script>"; 
	   
	   echo"<script>window.open('index.php','_self')</script>";
    }

	$delete_p = "delete from entery where cos_id='$u_id'";
	$run_delete_p = mysqli_query($con, $delete_p);
	
}
?>

