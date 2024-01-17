<?php

require_once 'connection-1.php';

$sql_cart = "SELECT * FROM cart";
$all_cart = $conn->query($sql_cart);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="product-review-style.css">
  <title>Document</title>
</head>
<body>
<?php
      include_once 'header.php';
   ?>

<table border>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Username</th>
			<th>Password</th>
			<th>Picture</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$select = $conn->prepare("SELECT * FROM customers");
			$select->execute();
			
			while($row = $select->fetch()){
				$id = $row['customerID'];
				$firstN = $row['fname'];
				$last = $row['lname'];
				$email = $row['email'];
				$username = $row['uname'];
				$password = $row['pword'];
				$picture = $row['img'];
				
			
		?>
		<tr>
			<td><?php echo $firstN." ".$last;?></td>
			<td><?php echo $email;?></td>
			<td><?php echo $username;?></td>
			<td><?php echo $password;?></td>
			<td><img src="upload/<?php echo $picture;?>" alt="Picture" width="100"></td>
			<td><a href="edit.php?uid=<?php echo $id;?>">Edit</a> | <a href="delete.php?uid=<?php echo $id;?>" onclick="return confirm('Are you sure?')">Delete</a></td>
		</tr>
			<?php } ?>
	</tbody>
</table>
</body>
</html>