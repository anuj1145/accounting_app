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
	height:500px;
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
</style>
 <body>
  <div class="header"><img src="images/logo10.png" height="40" width="120"></div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <div class="left_content">
<?php

      
            $get_like = "select*from costumers";
            $run_like = mysqli_query($con, $get_like);
            $row=mysqli_fetch_array($run_like);
            $num_rows=mysqli_num_rows($run_like);
			

			
			$total=0;
			$pro_price="select*from entery ";
			$run_pro_price=mysqli_query($con,$pro_price);
			
            
			while($p_price=mysqli_fetch_array($run_pro_price)){
			$amount=array($p_price['price']);
			$values=array_sum($amount);
			$total +=$values;
			}
		   
	 
?>
  <h2>Dashboard</h2>
  <table> 
  <tr>
   <th><h3> Total Due Amount </h3></th>
   <th><h3> Total Customers </h3></th>
   <th><h3> Total Paid </h3></th>

  </tr>
  <tr>
   <td align="center"style="color:red;"><h3><?php echo $total;?></h3></td>
   <td align="center"style="color:#ffc107;"><h3><?php echo $num_rows;?></h3></td>
   <td align="center"style="color:green;"><h3>30,00</h3></td>
  </tr>
  
  
  </table>

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