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
	padding:10px;
	margin-top:5px;
	height:480px;
	width:83%;
	background:#fff;
	border:1px solid black;
}
table,th,td {
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
<head>
<?php

		$en_id = $_GET['en_id'];

		
        $get_user = "select * from entery where entery_id='$en_id'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);
		

      $cos_id=$row['cos_id'];
      $work=$row['work'];
	  $wr_desc=$row['wr_desc'];
	  $reg_date=$row['date'];
	  $amount=$row['price'];
		
		
?>
</head>
 <body>
  <div class="header"><img src="images/logo10.png" height="40" width="120"></div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <div class="left_content">
  <div align="center">

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
  <td><b>Work</b></td>
  <td>
  <input type="text" name="work" value="<?php echo $work;?>" />
  </td>
  </tr>
  <tr>
  <td><b>Descripation</b></td>
  <td>
  <input type="text" name="desc" value="<?php echo $wr_desc;?>" />
  </td>
  </tr>



   <tr>
  <td><b>Amount</b></td>
  <td>
  <input type="text" name="u_amount" value="<?php echo $amount;?>" />
  </td>
  </tr>
 
  <td colspan="2" align="center"><input type="submit" name="update" value="Save"style="	background: linear-gradient(rgba(76,175,80,1), rgba(1,4,4));
	border-radius:4px;
	border:none;
	color:#fff;
	font-size:15px;
"/>
	<button><a href="addin_costumer.php?cos_id=<?php echo $cos_id; ?>"style="text-decoration:none; color:#fff;">Cancel</a></button></div>
  
  </tr>
	
  </table>
  
  </form>
   </div>



  </div>
  <div class="right_content">
    <ul>
	   <li><a href="index.php">Dashboard</a></li>
       <li><a href="all_costumer.php">All Customers</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
    </ul>
  
  </div>
  <div class="footer"><div align="center" class="footer_text">&copy: copyright 2018 by Deal24</div></div>
  
 
 
 
 </body>
</html>

<?php 
if(isset($_POST['update'])){

$u_name = $_POST['work'];
$u_desc = $_POST['desc'];
$u_amount = $_POST['u_amount'];


$update_en = "update entery set work='$u_name', price='$u_amount', wr_desc='$u_desc' where entery_id='$en_id'";

$run = mysqli_query($con, $update_en);

if($run){
	echo"<script>alert('your profile update sussfull')</script>";
	
    }
	 else{
		 echo"<script>alert('something went rong try again latter')</script>";
		}
	echo"<script>window.open('addin_costumer.php?cos_id=$cos_id','_self')</script>";
}

?>




