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
        $select = $conn->prepare("SELECT * FROM product");
        $select->execute();

        while($row = $select->fetch()){
          $id = $row['product_id'];
          $product_discrip = $row['produc_discrip'];
          $productname = $row['product_name'];
          $discount = $row['discount'];
          $price = $row['price'];
          $product_picture = $row['product_image'];
        
        ?>
        <tr>
          <td id="id"><?php echo $id;?></td>
          <td><?php echo $productname." ".$price?></td>
          <td><?php echo $discount;?></td>
          <td><?php echo $product_discrip;?></td>

          <td><img src="upload/<?php echo $product_picture;?>"alt="Picture" width="150"></td>
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