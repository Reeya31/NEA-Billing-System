<?php
include("dbconnect.php");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
 <form action="#" method="post">
    <h3>Login</h3>
    
    <div class="form-item">
        <input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
        <input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
        <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>