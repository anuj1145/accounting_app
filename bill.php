<!DOCTYPE html>
<html>
<SCRIPT>
	function myFunction() {
		window.print();
	}
</SCRIPT>

<head>
	<meta charset="UTF-8">
	<title>Generate invoice</title>



	<link rel="stylesheet" href="css/style.css">


</head>
<fieldset>

	<body style="
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 20px;
    padding-right: 20px;">
	</body>

	<html>
	<?php
	include "includes/db24.php";

	$entry = $_GET['user_id'];
	//$sql="select p.*,e.* from product p JOIN entery e on p.cust_id=e.cos_id WHERE p.cust_id=42 order by 1 DESC";
	$sql = "select p.*,e.*,c.* from product p JOIN entery e on p.cust_id=e.cos_id join costumers c on p.cust_id=c.cos_id WHERE p.cust_id=$entry GROUP by entery_id";
	$data = mysqli_query($con, $sql); ?>

	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
	</head>
	<?php
	$row=mysqli_fetch_assoc($data);
	?>
	<header>
				<h1>Invoice</h1>
				<address value="prefix" style="color: blue;font-size: medium">
					<p><?php echo $row['cos_name'] ?></p>
					<p><?php echo $row['cos_address'] ?></p>
					<p><?php echo $row['mobile'] ?></p>
				</address>
				<span><img alt="" src="23.png"><input type="file" accept="image/*"></span>
			</header>
			<br>
			<address value="prefix" contenteditable>
							<p>Add your signature</p>
						</address>

						<table class="meta">
					<tr>
						<th><span value="prefix">Invoice #</span></th>
						<td><span contenteditable>
								<p><?php echo $row['cos_id'] ?></p>
							</span></td>
					</tr>
					<tr>
						<th><span value="prefix">Date</span></th>
						<td><span id="date" value="today"><?php echo $row['date'] ?></span></td>
					</tr><br><br>
						</table>
						<br><br>
						<hr>
						
	<?php
	while ($row = mysqli_fetch_assoc($data)) {
		//print_r($row);
	?>

		<body>
			
			<article>


				<table class="meta">

					<tr>
						<th></th>

					</tr>
				</table>

				<table class="inventory">
					<thead>
						<tr>
							<th><span id="prefix">Item</span></th>
							<th><span id="prefix">Description</span></th>
							<th><span id="prefix">Quantity</span></th>
							<th><span id="prefix">Price</span></th>
						</tr>
					</thead>
					<tbody>

						<tr>




							<!-- </span></td><?php // echo '<pre>';print_r($row);
												?> -->
							<td><?php echo $row['item'] ?></td>
							<td><?php echo $row['item_desc'] ?></td>
							<td><?php echo $row['quantity'] ?></td>
							<td><?php echo $row['pro_price'] ?></td>



						</tr>
						
				</table>
				<br>


				
			<?php } ?>
			<table class="balance">
					<tr>
						<th><span id="prefix">Total</span></th>
						<td><span data-prefix>Rs.</span> <?php echo $row['pro_price'] ?></td>
					</tr>
					<tr>
						<th><span id="prefix">Amount Paid</span></th>
						<td><span data-prefix>Rs </span><span contenteditable>0</span></td>
					</tr>
					<tr>
						<th><span id="prefix">Balance Due</span></th>
						<td><span data-prefix>Rs.</span> <span contenteditable>1</span></td>
					</tr>
				</table>
			</article>
			<a class="add">Creat</a>
			<aside>
				<h1><span id="prefix">A Trustable service Platform</span></h1>
				<span>
					<button class="button" onclick="myFunction()">Print</button>
				</span>
			</aside>

			<script src="js/index.js"></script>

		</body>
</fieldset>

</html>