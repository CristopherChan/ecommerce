<?php 
include("connection.php");

$uid = $_GET['uid'];

$select = $conn->prepare("SELECT fname, mname, lname FROM customer WHERE customersID = :id");
$select->bindParam(":id", $uid);
            $select->execute();

            while($row = $select->fetch()){
                $firstname = $row['fname'];
                $middlename = $row['mname'];
                $lastname = $row['lname'];
            }

if(isset($_POST['update'])){
  
  $firstname = $_POST['fname'];
  $middlename = $_POST['mname'];
  $lastname = $_POST['lname'];

  $query = $conn->prepare("UPDATE customer SET fname = :one, mname = :two, lname = :three WHERE customersID = :uid");
  $query->bindParam(":one",$firstname);
  $query->bindParam(":two",$middlename);
  $query->bindParam(":three",$lastname);
  $query->bindParam("uid",$uid);
  $query->execute();

  echo "<script>alert('successfully Updated!')</script>";
  echo "<script>window.open('viewrecords.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ViewRecords</title>
  <link rel="stylesheet" href="style-2.css">
</head>
<body>
  <div class="con">
    <div class="con-1">
      <div class="title">
        <h2>Update Records</h2>
      </div>
      <a id="add" href="index.php">Add Records</a> | <a id="views" href="viewrecords.php">View Records</a>
    </div>
    <div class="con-2">
      <form action="" method="post">
        <div class="max">
          <label for="fname">Firstname:</label>  
          <input type="text" name="fname" value="<?php echo $firstname; ?>" required>
        </div>
        <div class="max">
          <label for="mname">Middlename:</label>  
          <input type="text" name="mname" value="<?php echo $middlename; ?>" required>
        </div>
        <div class="max">
          <label for="lname">Lastname:</label>  
          <input type="text" name="lname" value="<?php echo $lastname; ?>" required>
        </div>
        <div class="max">
          <label for="&nbsp"></label>
          <input type="submit" id="sub" name="update" value="update">  
          
        </div>
    </div>
  </div>
</body>
</html>
