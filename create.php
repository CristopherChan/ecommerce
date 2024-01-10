<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="create-style.css">
  <title>login</title>
</head>
<body>
  <div class="main-container">
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <img class="menu" src="./img/icons8-menu-50.png" alt="menu">
    </label>
    <label class="logo"><a href="index.html"><img class="mulana" src="./img/MULANA-removebg-preview.png" alt="picture"></a></label>
    <ul>
      <li><a class="active" href="index.html">Home</a></li>
      <li><a href="#">Shop</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Customize</a></li>
    </ul>
    <ol class="imgs">
      <li><img class="search" src="./img/search.png" alt=""></a></li>
      <li><a href="login.html" target=""><img class="people" src="./img/people.png" alt="picture" ></a></li>
      <li><img class="grocery" src="./img/grocery-store.png" alt=""></li>
    </ol>
  </nav>
  <div class="main-container-1">
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <table class="table">
            <header class="title">Create An Account</header>
            <h4 class="info">personal information</h4>
            
            <div class="colunm">
                <div class="input-box">
                    <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                </div>

                <div class="input-box">
                    <input type="text" id="lname" name="lname" placeholder="Enter LastName" required>
                </div>
               
                <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                </div>
                
                <div class="input-box">
                    <input type="text" id="uname" name="uname" placeholder="Enter Username" required>
                </div>
                
                <div class="input-box">
                    <input type="password" id="pword" name="pword" placeholder="Enter Password" required>
                </div>
                
                <div class="input-box">
                    <input type="file" id="file" name="img" accept="image/*">
                </div>
                
                <div class="input-box">
                    <label for="&nbsp"></label>
                    <input type="submit" id="submit" name="register" value="Register">
                </div>
                <div class="input-box">
                  <span>Already have an account?</span><a class="log" href="login.php">Sign in</a>
              </div>
                
            </div>
        </table>
    </form>
  </div>
</div>
</body>
</html>