<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <link rel="icon" href="logo/logo.png" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .btn-dark{
      position:relative;
      left:1%;
      font-style:italic;
      font-family: Coronetscript, cursive;
     
    }
label{
    font-style:italic;
    font-weight:bold;
    font-size:20px;
   
}
a{
    color:black;
    font-size:15px;
    position:relative;
    left:70%;
    font-style:italic;
      font-family: Coronetscript, cursive;

}
.form-control{
  font-style:italic;
      font-family: Coronetscript, cursive;

}

  </style>
</head>
<body style="background:url(photo/loginback.jpg)no-repeat; background-size: cover;">
<form action="includes/login.inc.php" method="POST">
<div class="container" style="width:900px;height:500px;border:solid 5px whitesmoke;margin-top:7%;border-radius:10px; border-radius: 18px;">
<div class="row">
<div class="col-sm-6">
<img src="photo/so4.jpeg" style="height:490px;width:320px;position:relative;left:-3.3%;width:450px;top:0%;">
</div>
<div class="col-sm-6">
<h1 style="font-style:italic;position:relative;text-align:center;font-family: Coronetscript, cursive;font-weight:bold;color:whitesmoke;font-size:40px">Login form</h1>
<?php
if(isset($_GET['error']))
{
  if($_GET['error']=="emptyfields")
  {
    echo'<p style="text-align:center;color:red;font-size:20px;font-weight:bold">All Fields are empty!</p>';
  }
  else if($_GET['error']=="invaliduser")
  {
    echo'<p style="text-align:center;color:red;font-size:20px;font-weight:bold">Invalid Username!</p>';
  }
  else if($_GET['error']=="wrongpasswordoruser")
  {
    echo'<p style="text-align:center;color:red;font-size:20px;font-weight:bold">wrong password or username!</p>';
  }
  }
?>

<hr  width="100%" style="border-bottom: solid 2px black;border-color: whitesmoke">
<label>User Name:</label>
<input type="text" class="form-control" placeholder="user name" name="user"><br>
<label>Password:</label>
<input type="password" class="form-control" placeholder="password" name="pwds">
<a href="#">Forgot password?</a><br>
<input type="checkbox" class="lab">&nbsp;&nbsp;Remember me <br><br>
<input type="submit" value="      Login      " class="btn btn-primary" name="log" style="margin-left: 33%;font-style:italic;font-family: Coronetscript, cursive;">
</div>
</div>
</div>



</form>
</body>
</html>