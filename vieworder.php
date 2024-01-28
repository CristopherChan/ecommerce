<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style-1.css">
  <title>Customer Registration Form</title>
</head>
<body>
  <div class="main-container">
    <div class="container">
      <div class="header">
        <h1>All Records</h1>
      </div>
    <table class="tb_border">
      <thead>
        <tr>
          <th>#</th>
          <th>email</th>
          <th>address</th>
          <th>Zip Code</th>
          <th>Contant Number</th>
          <th>Customer Name</th>
          <th>total order</th>
          <th>total price</th>
          <th>Order Status</th>
          <th colspan="2" id="rows">action</th>
        </tr>
      </thead>
      <tbody>
      <?php
			$select = $conn->prepare("SELECT * FROM checkout");
			$select->execute();
			
			while($row = $select->fetch()){
				$ids = $row['id'];
				$email = $row['email'];
				$address = $row['add'];
				$code = $row['code'];
				$con_number = $row['number'];
				$cus_name = $row['name'];
				$total_products = $row['total_products'];
        $total_price = $row['total_price'];
        $status = $row['status'];
			
			
		?>
		<tr>
      <td><?php echo $ids;?></td>
			<td><?php echo $email;?></td>
			<td><?php echo $address;?></td>
			<td><?php echo $con_number;?></td>
      <td><?php echo $cus_name;?></td>
			<td><?php echo $total_products;?></td>
			<td><?php echo $total_price;?></td>
			<td><?php echo $status;?></td>
			<td><a href="edit.php?uid=<?php echo $ids;?>">Edit</a> | <a href="delete.php?uid=<?php echo $id;?>" onclick="return confirm('Are you sure?')">Delete</a></td>
		</tr>
			<?php } ?>
      </tbody>
    </table>
    <div class="view">
      <a id="reg" href="index.php">Register</a>
    </div>
    </div>

  </div>
</body>
</html>