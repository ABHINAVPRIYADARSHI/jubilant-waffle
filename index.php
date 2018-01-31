<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=100%, initial-scale=1">
<style>
 
form {
    border: 3px solid #f1f1f1;
    width: 30%;
    position:relative;
    max-width:525px;
    max-height:800px;
    margin:auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    //width: 30%;
}



</style>
</head>
<body>

<h2>Login Form</h2>

<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="loginid" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <!--<input type="submit" name="submit" value="login">-->
    <button  type="submit" name="submit">Login</button>
  </div>

</form>

</body>
</html>