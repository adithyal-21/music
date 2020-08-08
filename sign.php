
<!DOCTYPE html>
        <html lang="en">
        <head>
          <title>Registration Form</title>
          <link rel="icon" href="logo/sig.png" type="image/x-icon" />
       <link href="edit.css" rel="stylesheet">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .btn-dark{
      position:relative;
      left:110%;
      font-style:italic;
      font-family: Coronetscript, cursive;
  }
  label{
    font-style:italic;
    font-weight:bold;
    font-size:20px;
    color:whitesmoke;
    font-family:Parkavenue, cursive;
    font-size:23px;
}
.form-control{
    font-style:italic;
    font-family:Parkavenue, cursive;
}
  </style>
  </head>
<body style="background:url(photo/loginback1.jpg)no-repeat;background-position: center;background-size:cover">

  <form action="includes/sign.inc.php" method="POST">
 
  <div class="container" style="height:530px;width:600px;border:solid 4px whitesmoke;position:relative;margin-top:9%;border-radius:15px;text-align:center">
   
   <div class="row">
  <div class="col-sm-12">
  <h1 style="font-style:italic;position:relative;text-align:center;font-family: Coronetscript, cursive;font-weight:bold;color:whitesmoke;font-size:40px">REGISTER NOW</h1><br>
  <hr  width="100%" style="border-bottom: solid 2px black;border-color: whitesmoke">
  </div>
</div>
<?php
if(isset($_GET['error']))
{
  if($_GET['error']=="emptyfields")
  {
    echo'<p style="text-align:center;color:red;font-size:20px;font-weight:bold">All Fields are empty!</p>';
  }
  else if($_GET['error']=="usernametaken")
  {
    echo'<p style="text-align:center;color:red;font-size:20px;font-weight:bold">Username taken!</p>';
  }
  else if($_GET['error']=="done")
  {
    echo'<p style="text-align:center;color:greenyellow;font-size:20px;font-weight:bold">Succesfully Registered</p>';
  }
  
}
?>


<div class="row">
<div class="col-sm-4">
<label>Name:</label>
</div>
<div class="col-sm-6">
<input type="text" class="form-control" name="name" placeholder="Fullname">
</div>
</div><br>

<div class="row">
<div class="col-sm-4">
<label>User Name:</label>
</div>
<div class="col-sm-6">
<input type="text" class="form-control" name="user" placeholder="username/email">
<?php
if(isset($_GET['error']))
{
  if($_GET['error']=="invaliduser")
  {
    echo'<p style="text-align:center;color:red;font-size:20px;font-weight:bold">Invalid Username!</p>';
  }
}
  ?>
</div>
</div><br>


<div class="row">
<div class="col-sm-4">
<label>Password:</label>
</div>
<div class="col-sm-6">
<input type="password" class="form-control" name="pass" placeholder="password">
</div>
</div><br>

<div class="row">
<div class="col-sm-4">
<label>Re-password</label>
</div>
<div class="col-sm-6">
<input type="password" class="form-control" name="repass" placeholder="re-password">
<?php
if(isset($_GET['error']))
{
  if($_GET['error']=="passwordnotmatch")
  {
    echo'<p style="text-align:center;color:red;font-size:20px;font-weight:bold">password Missmatch!</p>';
  }
}
  ?>
</div>
</div><br>

<div class="row" style="margin-left: 33%;">
<div class="col-sm-4">
<input type="submit" value="      Register      " class="btn btn-secondary" name="reg">
</div>
</div>

</div>

</form>
</body>
</html>