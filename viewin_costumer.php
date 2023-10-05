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
	width:auto%;
	background:#4caf50;
}

.left_content{
	float:left;
	padding-left:20px;
	padding-top:20px;
	margin-top:5px;
	height:auto;
	width:83%;
	background:#fff;
	border:1px solid black;
}
table,td {
	padding:0px;
	border:1px solid black;
	border-collapse: collapse;

}
th{
	background:#4caf50;
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
}
select{
	width:200px;
	border:none;
}
b{
	text-transform: uppercase;
}
</style>
<head>
<?php

		$user = $_GET['cos_id'];
		
        $get_user = "select * from costumers where cos_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);

      $cos_id=$row['cos_id'];
      $cos_name=$row['cos_name'];
	  $cos_desc=$row['cos_desc'];
	  $reg_date=$row['date'];
	  $cos_amount=$row['amount'];
	  $cos_address=$row['cos_address'];
	  $cos_village=$row['village'];
	  $cos_mob=$row['mobile'];
	  $cos_status=$row['status'];
		
		
?>
</head>
 <body>
  <div class="header"><img src="images/logo10.png" height="40" width="120"></div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <div class="left_content"> 
  
 
   
  <div align="center">

   <div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
TOTAL ENTERIES OF MR.<b><?php echo $cos_name;?></b>
   </div>
  <table style="margin-right:740px;">
   <tr>
    <td><b>Name: </b></td><td><?php echo $cos_name;?></td>
	</tr>
	<tr>
    <td><b>Mobile No.: </b></td><td><?php echo $cos_mob;?></td>
	</tr>
	<tr>
    <td><b>Address: </b></td><td><?php echo $cos_address;?></td>
	</tr>
	<tr>
    <td><b>Village: </b></td><td><?php echo $cos_village;?></td>
   </tr>
   </table>

			<table>
			<tr>
			<th align="center" style="width:70px;">Sr No.</th>
            <th align="center" style="width:80px;">Name</th>
            <th align="center" style="width:180px;">Descripation</th>
			<th align="center" style="width:140px;">Price</th>
			<th align="center" style="width:180px;">Quantity</th>
			<th align="center" style="width:140px;">Total</th>
			<th align="center" style="width:110px;">Modify</th>
			</tr>
 
			
<?php

       $i=0;
		$get_costumers="select*from costumers where cos_id='$user' order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			
			$cos_id = $row_costumers['cos_id'];
			$cos_name = $row_costumers['cos_name'];
			$cos_mob = $row_costumers['mobile'];
			$cos_add = $row_costumers['cos_address'];
			$cos_village = $row_costumers['village'];
			$cos_desc = $row_costumers['cos_desc'];
			$amount = $row_costumers['amount'];
			$cos_status = $row_costumers['status'];
			$i++;
			
			if($amount=='0'){
				$u_status="<img src='images/paid.png' width='40'height='20'>";
			}
			
			  else{
				 $u_status="<img src='images/due.png' width='40'height='20'>";
			      }
			
			
	     ?> 

			<tr>
			<td align="center" ><?php echo $i; ?></td>
            <td align="center" ><?php echo $cos_name; ?></td>
            <td align="center" ><?php echo $cos_desc; ?></td>
			<td align="center" ><?php echo $cos_mob; ?></td>
			<td align="center" ><?php echo $cos_add; ?></td>
			<td align="center" ><?php echo $cos_village; ?></td>

			<td align="center" >
			<a href="view_costumer.php?cos_id=<?php echo $cos_id; ?>"><img src="images/view.png"width="20"height="20"></a>&nbsp;
			<a href="edit_costumer.php?cos_id=<?php echo $cos_id; ?>"><img src="images/edit.png"width="20"height="20"></a>&nbsp;
			<a href="delete.php?cos_id=<?php echo $cos_id; ?>"><img src="images/delete.png" width="20"height="20"></a></td>
			</tr>
			
			
			
		<?php } ?>

      </table>
  
  
   </div>



  </div>
  <div class="right_content">
    <ul>
	   <li><a href="index.php">Dashboard</a></li>
       <li><a href="all_costumer.php">All Customer</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
    </ul>
  
  </div>
  <div class="footer"><div align="center" class="footer_text">&copy: copyright 2018 by Deal24</div></div>
  
 
 
 
 </body>
</html>

<?php 
if(isset($_POST['update'])){

$u_name = $_POST['u_name'];
$mob = $_POST['mob'];
$cos_add = $_POST['cos_add'];
$village = $_POST['village'];
$village = $_POST['village'];
$u_desc = $_POST['u_desc'];
$u_amount = $_POST['u_amount'];


$update = "update costumers set cos_name='$u_name', mobile='$mob', cos_desc='$u_desc', cos_address='$cos_add', amount='$u_amount', village='$village' where cos_id='$cos_id'";

$run = mysqli_query($con, $update);
if($run){
	echo"<script>alert('your profile update sussfull')</script>";
	
    }
	 else{
		 echo"<script>alert('something went rong try again latter')</script>";
		}
	echo"<script>window.open('all_costumer.php','_self')</script>";
}

?>




