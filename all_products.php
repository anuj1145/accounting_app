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
  <div class="header"><img src="images/logo10.png" height="40" width="120"></div>
  <div class="navbar"><a href="add_pro.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <center><h4>Products List</h4></center>
  <div class="left_content">
    
			<table>
			<tr>
			<th align="center" style="width:50px;">Sr No.</th>
            <th align="center" style="width:100px;">Product Name</th>
            <th align="center" style="width:80px;">Price</th>
			<th align="center" style="width:300px;">Description</th>
            <th align="center" style="width:320px;">Action</th>
			</tr>
 
			
<?php

       $i=0;
		$get_products="select * from product order by 1 DESC;";
		
		$run_products=mysqli_query($con, $get_products);
		
		while ($row_products=mysqli_fetch_array($run_products)){
			
			
			$pro_id = $row_products['id'];
			$pro_name = $row_products['pro_name'];
			$pro_price = $row_products['pro_price'];
			$pro_desc = $row_products['pro_desc'];
			$i++;
	     ?> 

			<tr>
			<td align="center" ><?php echo $i; ?></td>
            <td align="center" ><?php echo $pro_name; ?></td>
			<td align="center" ><?php echo $pro_price; ?></td>
			<td align="center" ><?php echo $pro_desc; ?></td>
			<td align="center" style="width:100px;">
			<a href="addin_costumer.php?pro_id=<?php echo $cos_id; ?>"><img src="images/add.png"width="20"height="20"></a>&nbsp;
			<a href="view_costumer.php?pro_id=<?php echo $cos_id; ?>"><img src="images/view.png"width="20"height="20"></a>&nbsp;
			<a href="edit_costumer.php?pro_id=<?php echo $cos_id; ?>"><img src="images/edit.png"width="20"height="20"></a>&nbsp;
			<a href="delete.php?cos_id=<?php echo $cos_id; ?>"><img src="images/delete.png" width="20"height="20"></a></td>
			</tr>
			
			
			
		<?php } ?>

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
  <div class="footer"><div align="center" class="footer_text">&copy: copyright 2023 by Deal24</div></div>
  
 
 
 
 </body>
</html>

