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
                         <form method="get" action="result.php" enctype="multipart/form-data">
							<input type="text" name="user_query" placeholder="Search by categoris ...." style="border:none;height:25px;width:350px;"/>
							
							<input type="submit"name="search" value="Search" style="font-size:19px;margin:5px;background:#4caf50;border:none;color:#fff;" />
						</form>
  
  </div>
  <div class="navbar"><a href="add_costumer.php"><img src="images/add1.png" height="24" width="70"></a></div>
  <div class="left_content">
    
			<table>
			<tr>
			<th align="center" style="width:50px;">Sr No.</th>
            <th align="center" style="width:60px;">Clint Id</th>
            <th align="center" style="width:180px;">Name</th>
			<th align="center" style="width:140px;">Mobile No.</th>
			<th align="center" style="width:180px;">Address</th>
			<th align="center" style="width:140px;">Village</th>
			<th align="center" style="width:110px;">Amount</th>
			<th align="center" style="width:110px;">Status</th>
			<th align="center" style="width:110px;">Modify</th>
			</tr>
 
			
<?php

       $i=0;
		$get_costumers="select*from costumers order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			
			$cos_id = $row_costumers['cos_id'];
			$cos_name = $row_costumers['cos_name'];
			$cos_mob = $row_costumers['mobile'];
			$cos_add = $row_costumers['cos_address'];
			$cos_village = $row_costumers['village'];
			$cos_status = $row_costumers['p_status'];
			$i++;
			
			
	

		
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

			<tr>
			<td align="center" ><?php echo $i; ?></td>
            <td align="center" ><?php echo $cos_id; ?></td>
            <td align="center" ><?php echo $cos_name; ?></td>
			<td align="center" ><?php echo $cos_mob; ?></td>
			<td align="center" ><?php echo $cos_add; ?></td>
			<td align="center" ><?php echo $cos_village; ?></td>
			<td align="center" ><?php echo $total; ?></td>
			<td align="center" ><?php echo $u_status; ?></td>
			<td align="center" style="width:100px;">
			<a href="addin_costumer.php?cos_id=<?php echo $cos_id; ?>"><img src="images/add.png"width="20"height="20"></a>&nbsp;
			<a href="view_costumer.php?cos_id=<?php echo $cos_id; ?>"><img src="images/view.png"width="20"height="20"></a>&nbsp;
			<a href="edit_costumer.php?cos_id=<?php echo $cos_id; ?>"><img src="images/edit.png"width="20"height="20"></a>&nbsp;
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
  <div class="footer"><div align="center" class="footer_text">&copy: copyright 2018 by Deal24</div></div>
  
 
 
 
 </body>
</html>

