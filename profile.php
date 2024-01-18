<?php
include_once("connection.php");
session_start();
include_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="profile-style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mulanaPh</title>
</head>
<body>
  <form action="process.php" method="post">
  
    <div class="imgcontainer">
      <h1 class="welcome">Hi <?php echo $pangalan." ".$apelyido;?></h1>
      <img class="logo" src="upload/<?php echo $larawan;?>" alt="User Profile" > 
    </div>
    <div class="con">
    <div class="container" >
    <a class="edit" href="edit.php?uid=<?php echo $uid;?>">Edit Profile</a>
    </div>
    <div class="container-1" >
      <a class="cancel" href="#">Cancel?</a></span>
    </div>
    </div>
  </form>
</body>
</html>