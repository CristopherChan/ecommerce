<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="login-style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mulanaPh</title>
</head>
<body>
  <form action="process.php" method="post">
    <div class="imgcontainer">
      <h1 class="welcome">welcome</h1>
      <img src="./img/MULANA-removebg-preview.png" alt="picture" class="logo">
    </div>
  
    <div class="container">
      <input type="text" placeholder="Enter Username" name="uname" required>
  
      <input type="password" placeholder="Enter Password" name="pword" required>
          
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  
    <div class="container" >
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    <div class="input-box">
      Don't have an account?<a class="log" href="create.php" target="_blank">Sign Up</a>
  </div>
  </form>
</body>
</html>