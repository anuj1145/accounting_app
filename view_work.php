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
	padding:3px;
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
</style>
 <body>
  <div class="header"><img src="images/logo10.png" height="40" width="120">
  
  
  </div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <div class="left_content">
    
   
<?php

		$user = $_GET['en_id'];
		
        $get_user = "select * from entery where entery_id='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row=mysqli_fetch_array($run_user);

      $cos_id=$row['cos_id'];
	   $entery_id=$row['entery_id'];
      $work=$row['work'];
	  $wr_desc=$row['wr_desc'];
	  $date=$row['date'];
	  $price=$row['price'];
		
		
?> 

<table align="center"width="400px"height="300px">
<tr><td align="center" colspan="2"style="font-size:20px;"><b> Entery Detail </b></td></tr>
  <tr>
  <td><b>Entery Id: </b></td>
  <td>  # 
  <?php echo $entery_id;?>
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
  <td>
 <?php echo $wr_desc;?>
  </td>
  </tr>
  <tr>
  <td><b>Working Date: </b></td>
  <td> 
  <?php echo $date;?>
  </td>
  </tr>
    <tr>
  <td><b>Amount: </b></td>
  <td> 
  <?php echo $price;?>
  </td>
  </tr>
<tr style="height:35px;">
	<td align="center" colspan="2"><a href="all_costumer.php"style="text-decoration:none; color:#fff;background: green;padding:5px;">Back</a>
  
  </tr>

  </table>
		 
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

