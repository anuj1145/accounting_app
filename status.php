<?php

include("includes/db24.php");

?>
<html>
<head>
<title>Deal24</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
#box_header{
	width:auto;
	height:30px;
	background-color:#337ab7;

	font-size:20px;
}
#costumer_box{
	height:185px;
	padding:0px;
	margin-left:5px;
	margin-top:5px;
	margin-bottom:5px;
	border-radius:4px;
    border:1px solid #337ab7;
	
}
#box_left {margin:5px; float:left;width:120px;height:140px; border-radius:4px; border:1px solid #337ab7;}
#box_right{float:right;margin-bottom:10px;margin:5px; float:left;width:250px; height:140;border:0px solid #fff;}
h1 {
    text-align: center;
    text-transform: uppercase;
	color:#fff;
}
b {
    text-align: center;
    text-transform: uppercase;
	color:#000;
	font-size:12px;
}
table {
    border-collapse: collapse;
	margin-bottom:90px;
}

table, td {
    border: 1px solid black;
	
}
th{
	color:#fff;
	background-color:#4caf50;
    height:30px;
    padding:5px;
}	
.navbar {
    overflow: hidden;
    background-color: #222;
    font-family: Arial, Helvetica, sans-serif;
	width:auto;
    padding-top:20px;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 5px 16px;
    text-decoration: none;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 5px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color:#4caf50;
}

.navbar a:visited {
    background-color:#4caf50;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 5px 5px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<?php

		$user = $_GET['cos_id'];
		
        $get_user = "select * from costumers where costumer_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);

      $cos_id=$row['costumer_id'];
      $cos_name=$row['costumer_name'];
      $cos_pic=$row['costumer_pic'];
	  $reg_date=$row['date'];
	  $cos_cat=$row['cat_name'];
	  $cos_buss_add=$row['business_add'];
	  $cos_village=$row['village'];
	  $cos_dist=$row['dist'];
	  $cos_buss_name=$row['business_name'];
	  $cos_mob=$row['mob'];
	  $cos_email=$row['costumer_email'];
	  $cos_pass=$row['costumer_pass'];
	  $cos_desc=$row['costumer_desc'];
	  $cos_status=$row['status'];
		
?>

<body>
<div id="main_container">

<div id="sub_header">
                  <div id="logo">
				  <img src="images/logo10.png" width="170" height="55">
				  </div>
				  	<div id="admin">WELCOME ADMIN</a></div>
                   <div style="padding-left:200px">
                      
						<form method="get" action="result.php" enctype="multipart/form-data"
 >
							<input type="text" name="user_query" placeholder="Search by categoris ...." style="border:none;height:25px;width:250px;"/>
							
							<input type="submit"name="search" value="Search" style="font-size:19px;margin:5px;background:#4caf50;border:none;color:#fff;" />
						</form>
						
						</div>
						 <div class="navbar">
                         <a href="index.php">Home</a>
						 <a href="index.php">Costumers</a>
						 <a href="index.php">Categories</a>
						 <a href="index.php">Approved</a>
						 <a href="index.php">Pending</a>
						
						 </div>
					</div>

  <div align="center" class="center_content"style="height:auto;">

     <form method="post" action="" enctype="multipart/form-data">
   <div style="font-size:30px; font-style:bolder;padding-bottom:20px;padding-top:20px;">
  Edit Your Profile Carefully
   </div>
  <table>
  <tr>
  <td><b>Costumer Id: </b></td>
  <td>  # 
  <?php echo $cos_id;?>
  </td>
  </tr>
   <tr>
  <td><b>Your Pic</b></td>
  <td>
  <?php echo "<img src='../costumers/costumer_images/$cos_pic' width='70' height='70' /></a>"?>
  </td>
  </tr>
  <tr>
  <td><b>Name</b></td>
  <td>
 <?php echo $cos_name;?>
  </td>
  </tr>
  <tr>
  <td><b>Email</b></td>
  <td>
  <?php echo $cos_email;?>
  </td>
  </tr>
  <tr>
  <td><b>Password</b></td>
  <td>
 <?php echo $cos_pass;?>
  </td>
  </tr>
  <tr>
  <td><b>Contact No.</b></td>
  <td>
 <?php echo $cos_mob;?>
  </td>
  </tr>
  <tr>
  <td><b>Select Category</b></td>
    <td><?php echo $cos_cat;?></td>
  <tr>
  <td><b>Business Name</b></td>
  <td>
  <?php echo $cos_buss_name;?>
  </td>
  </tr>
   <tr>
  <td><b>Business Address</b></td>
  <td>
  <?php echo $cos_buss_add;?>
  </td>
  </tr>

    <tr>
  <td><b>Select District</b></td>
     <td><?php echo $cos_dist;?></td> 
	  </tr>
	  <tr>
	  <td><b>Select Village</b></td>
	  <td><?php echo $cos_village;?></td> 
  </tr>
    <tr>
  <td><b>Descripation</b></td>
 <td><?php echo $cos_desc; ?></td>
  </tr>
     <tr>
  <td colspan="2"style="padding:5px;"><input type="checkbox" value="Approved" name="status">Approved</td>
 <td></td>
  </tr>
 
  <td colspan="2" align="center"><input type="submit" name="update" value="Save"style="	background: linear-gradient(rgba(76,175,80,1), rgba(1,4,4));
	border-radius:4px;
	border:none;
	color:#fff;
	font-size:15px;
"/>
	<button><a href="index.php"style="text-decoration:none; color:#fff;">Cancel</a></button></td>
  
  </tr>
	
  </table>
  
  </form>
   
  </div>
 <div class="footer">
  <div class="footer_text" align="center"><h3>&copy: copyright 2018 by Deal24</h3></div></div>
 
	</div>
</body>
</html>
 
<?php 
if(isset($_POST['update'])){


$u_status = $_POST['status'];


$update = "update costumers set status='$u_status' where costumer_id='$cos_id'";

$run = mysqli_query($con, $update);
if($u_status==''){
	echo"<script>alert('please select check')</script>";
	exit();
}
else{
  if($run){
	   echo"<script>alert('you Are Approved Customer Successful')</script>";
	
    }
	 else{
		 echo"<script>alert('something went rong try again latter')</script>";
		}
}

	echo"<script>window.open('index.php','_self')</script>";


}
?>




