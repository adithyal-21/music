<?php 
if(isset($_POST['log']))
{
    require 'data.inc.php';
$uid=$_POST['user'];
$pwd=$_POST['pwds'];

    if(empty($uid) || empty($pwd))
    {
        header("Location: ../login.php?error=emptyfields");
        exit();

    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$uid))
    {
        header("Location: ../login.php?error=invaliduser");
        exit();
    }

    else
    { 
     
      $sql="SELECT * FROM info WHERE user='$uid' AND pass='$pwd'";
        $conne=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($conne);
        if(mysqli_num_rows($conne)==1)
        {
           
            session_start();
            $_SESSION['userid']=$row['id'];
            $_SESSION['user']=$row['user'];
         header("Location: ../home.php?login=success");
                exit();
            }
            else
            {
                header("Location: ../login.php?error=wrongpasswordoruser");
                exit();
           }
}

    }  

   