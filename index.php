<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
<div class="main-container">
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <table class="table">
            <header class="title">Registration Form</header>
            
            <div class="colunm">
                <div class="input-box">
                    <label for="fname">Firstname:</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                </div>

                <div class="input-box">
                    <label for="mname">Middlename:</label>
                    <input type="text" id="mname" name="mname" placeholder="Enter Middlename">
                </div>

                <div class="input-box">
                    <label for="lname">Lastname:</label>
                    <input type="text" id="lname" name="lname" placeholder="Enter LastName" required>
                </div>
               
                <div class="input-box">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" required>
                </div>
                
                <div class="input-box">
                    <label for="adds">Address:</label>
                    <input type="text" id="adds" name="adds" placeholder="Enter Username" required>
                </div>
                
                <div class="input-box">
                    <label for="bday">Birthday:</label>
                    <input type="date" id="bday" name="bday" placeholder="Enter Username" required>
                </div>
                
                <div class="input-box">
                    <label for="uname">Username:</label>
                    <input type="text" id="uname" name="uname" placeholder="Enter Username" required>
                </div>
                
                <div class="input-box">
                    <label for="pword">Password:</label>
                    <input type="password" id="pword" name="pword" placeholder="Enter Password" required>
                </div>
                
                <div class="input-box">
                    <label for="img">Picture</label>
                    <input type="file" id="file" name="img" >
                </div>
                
                <div class="input-box">
                    <label for="&nbsp"></label>
                    <input type="submit" id="submit" name="register" value="Register">
                </div>
                <div class="input-box">
                    <a id="view" href="viewrecords.php">View Records</a>
                </div>
            </div>
        </table>
</form>
</div>
</body>
</html>