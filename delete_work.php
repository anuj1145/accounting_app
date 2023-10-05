
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

		$user = $_GET['en_id'];
		
        $get_user = "select * from entery where entery_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);

      $cos_id=$row['cos_id'];
      $work=$row['work'];
	  $wr_desc=$row['wr_desc'];
	  $reg_date=$row['date'];
	  $amount=$row['price'];
		
		
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
  <table style="width:400px;">
  <tr>
  <td><b>Costumer Id: </b></td>
  <td>  # 
  <?php echo $cos_id;?>
  </td>
  </tr>
  <tr>
  <td><b>Work</b></td>
  <td>
  <?php echo $work;?>
  </td>
  </tr>
  <tr>
  <td><b>Descripation</b></td>
    <td><?php echo $wr_desc;?></td>

   <tr>
  <td><b>Amount</b></td>
  <td>
  <?php echo $amount;?>
  </td>
  </tr>

  </table>
    <div align="center"><input type="submit" name="delete" value="delete"style="	background: linear-gradient(rgba(76,175,80,1), rgba(1,4,4));
	border-radius:4px;
	border:none;
	color:#fff;
	font-size:15px;
	margin-top:10px;
"/>
	<button><a href="addin_costumer.php?cos_id=<?php echo $cos_id; ?>"style="text-decoration:none; color:#fff;">Cancel</a></button></div>
  
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


$u_id = $_GET['en_id'];


$delete = "delete from entery where entery_id='$u_id'";

$run_delete = mysqli_query($con, $delete);
  if($run_delete){
	  
	   echo"<script>confirm('Do You Realy Want To Delete')</script>"; 
	   
	   echo"<script>window.open('addin_costumer.php?cos_id=$cos_id','_self')</script>";
    }

}
?>

