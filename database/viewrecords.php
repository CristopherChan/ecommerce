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
        $select = $conn->prepare("SELECT * FROM customer");
        $select->execute();

        while($row = $select->fetch()){
          $id = $row['customersID'];
          $firstname = $row['fname'];
          $middlename = $row['mname'];
          $lastname = $row['lname'];
          $email = $row['email'];
          $username = $row['uname'];
          $picture = $row['imag'];
        
        ?>
        <tr>
          <td id="id"><?php echo $id;?></td>
          <td><?php echo $firstname." ".$middlename." ".$lastname;?></td>
          <td><?php echo $email;?></td>
          <td><?php echo $username;?></td>
          <td><img src="upload/<?php echo $picture;?>"alt="Picture" width="100"></td>
          <td><a id="edt" href="edit.php?uid=<?php echo $id;?>">Edit</a></td>
          <td><a id="del" href="delete.php?uid=<?php echo $id;?>" onclick="return confirm('Are you sure?')">Delete</a></td>

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