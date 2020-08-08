<?php
if(isset($_POST['reg']))
{
    require 'data.inc.php';
    
$name=$_POST['name'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];


if(empty($name) || empty($user) || empty($pass) || empty($repass))
{
    header("Location: ../sign.php?error=emptyfields");
    exit();
}

else if(!preg_match("/^[a-zA-Z0-9]*$/",$user))
{
    header("Location: ../sign.php?error=invaliduser");
    exit();
}

else if($pass!==$repass)
{
    header("Location: ../sign.php?error=passwordnotmatch");
    exit();
}
else{
    $sql="SELECT * FROM info WHERE user='$user'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
        
    header("Location: ../sign.php?error=usernametaken");
    exit();
    }
    else{
      
        $run="INSERT INTO info(name,user,pass)VALUES('$name','$user','$pass');";
        mysqli_query($conn,$run);
        header("Location: ../sign.php?error=done");
    }
}
}