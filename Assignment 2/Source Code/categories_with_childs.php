<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>HTML Elements Reference</title>
</head>
<body>
<center>
<h1> Register</h1>
</center>
</body>
</html>

<center>
<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    </div class="form-element">
          <label>Retype Email</label>
          <input type="retype email" name="retype email" required />
     </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <div class="form-element">
        <label>RetypePassword</label>
        <input type="retype password" name="retype password" required />
    <button type="submit" name="register" value="register">Register</button>
</center>

</form>

<div class='Response'>
<?php
if(isset($_POST['Register'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $retypeemail=$_POST['retypeemail'];
    $password=$_POST['password'];
    $retpepassword=$_POST['retypepassword'];

    $Insdata='Insert into' users(username, email, retypeemail, password, retypepassword) Values('$username', '$email', '$retypeemail', '$password', '$retpepassword');
    $execte = mysqui_query($conn, $Insdata);
}
?>

</form>
<body style="background-color:Grey;">
</html>