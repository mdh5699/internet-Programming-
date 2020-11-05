<html>
<head>
    <title> User Login and Registration form </title>
    <link rel="stylesheet" type="text/javascript"href="style.javascript">
     <link rel="stylesheet" type="text/javascript" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</head>
<body>
<center>
<div class="container">
    <div class="Login-box">
    <div class="row".
    <div class="col-md-6
       <h2> Login Here </h2>
       <form action="validation.php" method="post">
        <div class="form-group">
          <label>Userid</label>
          <input type="text" name="user" class="form-control" required>
          </div>
      <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary"> Login </button>
         </form>
       </div>
          
            <div class="col-md-6
       <h2> Register Here </h2>
       <form action="Registration.php" method="post">
        <div class="form-group">
          <label>Userid</label>
          <input type="text" name="user" class="form-control" required>
          </div>
      <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary"> Register </button>
         </form>
        
        </div>
       
        

</center>

</div>
</div>
</body>
</html>

