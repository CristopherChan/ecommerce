<?php 
include("connection.php");
session_start();
include_once("session.php");

$uids = $_GET['uid'];

$select = $conn->prepare("SELECT fname, mname, lname , addr, email ,uname,img FROM customers WHERE customerID = :id");
$select->bindParam(":id", $uids);
$select->execute();

            while($row = $select->fetch()){
                $firstname = $row['fname'];
                $middlename = $row['mname'];
                $lastname = $row['lname'];
                $address = $row['addr'];
                $email = $row['email'];
                $username = $row['uname'];
                $image = $row['img'];
            }

if(isset($_POST['update'])){
  
  $firstnames = $_POST['fname'];
  $middlenames = $_POST['mname'];
  $lastnames = $_POST['lname'];
  $addresss = $_POST['addr'];
  $emails = $_POST['email'];
  $usernames = $_POST['uname'];
 //$image = $_FILE['imga'];
  
  
    // Check for existing username
    $checkUsernameQuery = $conn->prepare("SELECT customerID FROM customers WHERE uname = :uname");
    $checkUsernameQuery->bindParam(":uname", $username);
    $checkUsernameQuery->execute();

    // Check for existing email
    $checkEmailQuery = $conn->prepare("SELECT customerID FROM customers WHERE email = :email");
    $checkEmailQuery->bindParam(":email", $email);
    $checkEmailQuery->execute();

    if ($checkUsernameQuery->rowCount() > 1) {
        echo "<script>alert('This username already exists. Please try another username!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else 
    if ($checkEmailQuery->rowCount() > 1) {
        echo "<script>alert('This email already exists. Please try another email!')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {

    $imageFile = $_FILES['imga']['name'];
    $tmpName = $_FILES['imga']['tmp_name'];
    $imgSize = $_FILES['imga']['size'];
    
    $upload_dir = "upload/";

    $imgExt = strtolower(pathinfo($imageFile, PATHINFO_EXTENSION));
    $validExtensions = array('jpeg', 'jpg', 'png');

    $newnames = rand(1000, 100000000).".".$imgExt;

    if(in_array($imgExt, $validExtensions)){
      if($imgSize <5000000){
        move_uploaded_file($tmpName,$upload_dir.$newnames);       
        $query = $conn->prepare("UPDATE customers SET fname = :one, mname = :two, lname = :three, addr = :four, email = :five, uname = :six, img = :seven WHERE customersID = :uid");
        $query->bindParam(":one",$firstnames);
        $query->bindParam(":two",$middlenames);
        $query->bindParam(":three",$lastnames);
        $query->bindParam(":four",$addresss);
        $query->bindParam(":five",$emails);
        $query->bindParam(":six",$usernames);
        $query->bindParam(":seven",$newnamess);
        $query->bindParam("uid",$uid);
        $query->execute();

        echo "<script>alert('successfully Updated!')</script>";
        echo "<script>window.open('viewrecords.php','_self')</script>";
        }else {
                      echo "<script>alert('your file is to large')</script>";
                      echo "<script>window.open('index.php','_self')</script>";
                  
                  }
          } echo "<script>alert('Sorry, only jpeg, jpg and png is allowed')</script>";
          echo "<script>window.open('index.php','_self')</script>";
            }
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
  <form action="" method="post" enctype="multipart/form-data">
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
          <label for="addr">Address:</label>  
          <input type="text" name="addr" value="<?php echo $address; ?>" required>
        </div>
        <div class="max">
          <label for="email">Email:</label>  
          <input type="text" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="max">
          <label for="uname">Username:</label>  
          <input type="text" name="uname" value="<?php echo $username; ?>" required>
        </div>
        <div class="max">
          <label for="img">old photos</label>  
          <img src="upload/<?php echo $image;?>"alt="Picture" width="150">
        </div>
        <div class="max">
          <label for="new_image">new image</label>
          <input type="file" id="sub" name="imga">  
          
        </div>
        <div class="max">
          <label for="&nbsp"></label>
          <input type="submit" id="sub" name="update" value="register">  
          
        </div>
    </div>
  </form>
  </div>
</body>
</html>
