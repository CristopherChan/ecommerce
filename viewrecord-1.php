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
          <th>name</th>
          <th>email</th>
          <th>username</th>
          <th>picture</th>
          <th colspan="2" id="rows">action</th>
        </tr>
      </thead>
      <tbody>
      <?php
			$select = $conn->prepare("SELECT * FROM customers");
			$select->execute();
			
			while($row = $select->fetch()){
				$ids = $row['customerID'];
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