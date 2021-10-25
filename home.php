<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Music Player</title>
  <link rel="icon" href="photo/title.jpeg" type="image/x-icon" />
  <meta charset="utf-8">
  <!-- Added Tag -->
  <meta name="keywords" content="Music project, Addition Tag">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="design.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <ul class="nav nav-pills">
  <li class="active"><a href="#"><img src="logo/interface.png">&nbsp;&nbsp;Music Player</a></li>
    <li class="a"><a href="#"><img src="logo/buildings.png">&nbsp;&nbsp;Home</a></li>
    <li class="b"><a href="#"><img src="logo/micro.png">&nbsp;&nbsp;Artist</a></li>
    <li class="c"><a href="#"><img src="logo/music.png">&nbsp;&nbsp;Releases</a></li>
    <li class="d"><a href="login.php"><img src="logo/direction.png">&nbsp;&nbsp;Login</a></li>
    <li class="e"><a href="includes/logout.inc.php"><img src="logo/arrows.png">&nbsp;&nbsp;Log-Out</a></li>
    <li class="f"><a href="sign.php"><img src="logo/users.png">&nbsp;&nbsp;Register</a></li>
   
    
    
    <?php
 if(isset($_SESSION['user']))
 {

   echo'<p style="color:greenyellow;font-family:Zapf Chancery, cursive;font-size:30px;left:50%;position:absolute;top:10%;font-style:italic;font-weight:bold">'.$_SESSION['user'].'</p>';
   
 }
 else
 {
echo'<script>alert("logged out");</script>';

 }

?>
  </ul>
</div>



<br>
<br>
<div class="container" >
    <div class="row">
      <div class="col-sm-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
    
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="photo/back1.jpg" style="filter:blur(3px)" >
              <div class="carousel-caption">
                <h3 style="color:whitesmoke">Explore the world of music</h3>
                
              </div>      
            </div>
    
            <div class="item">
              <img src="photo/back3.jpg" style="filter:blur(3px)">
              <div class="carousel-caption">
                <h3 style="color:yellow">Explore more songs</h3>
              
              </div>      
            </div>
            
            <div class="item">
              <img src="photo/back2.jpg" style="filter:blur(3px)">
              <div class="carousel-caption">
                <h3  style="color:whitesmoke;">Enjoy the Remixes</h3>
              
              </div>      
            </div>

          </div>
    
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
</div>
</div><br><br>





  <div class="row"style="cursor: pointer;">
    <div class="col-sm-3">
    
      <div class="a song" style="background:url(photo/so1.jpg)no-repeat;background-size: cover;height:200px;width:320px;border:solid 3px grey;border-radius: 10px">1</div>
     
</div>
<div class="col-sm-3">
<div class="b song" style="background:url(photo/so2.jpg)no-repeat;background-size: cover;height:200px;width:320px;border:solid 3px brown;border-radius: 10px;">2</div>
</div>
<div class="col-sm-3">
<div class="c song" style="background:url(photo/so3.jpeg)no-repeat;background-size: cover;height:200px;width:320px;border:solid 3px cornflowerblue;border-radius: 10px;">3</div>
</div>
<div class="col-sm-3">
<div class="d song" style="background:url(photo/log1.jpg)no-repeat;background-size: cover;height:200px;width:320px;border:solid 3px greenyellow;border-radius: 10px;">4</div>
</div>
</div>
<br><br>



<div class="container">
<div class="row">
<div class="col-sm-12">
<?php
if(isset($_SESSION['userid']))
{
  echo'<ul class="nav nav-pills">
  <li class="h"><a href="player.php"><img src="">Explore Now</a></li>
  </ul>';
}
else{
  echo'';
}
?>
  
</div>
</div>
</div>
<br>
<br>
<script>
var divlengh=document.querySelectorAll('.song').length;
console.log(divlengh);
for(var i=0;i<divlengh;i++)
{
  var demo=document.querySelectorAll('.song')[i].addEventListener('click',playsong);
  var demo=document.querySelectorAll('.song')[i].addEventListener('dblclick',pausesong);
 
}
var song1=new Audio();
song1.src="music/ashiqui2.mp3";
var song2=new Audio();
song2.src="music/Sittharala Sirapadu.mp3";
var song3=new Audio();
song3.src="music/gentelmen.mp3";
var song4=new Audio();
song4.src="music/sense.mp3";

function playsong()
{
  
  var id=this.innerHTML;
  console.log(id);
  switch(id)
  {
    case "1":
        song1.play();
        break;
      case "2":
        song2.play();
        break;
      case "3":
        song3.play();
        break;
      case "4":
        song4.play();
        break;
        default:
          console.log("wrong input");
          break;
  }
  
}function pausesong()
{
  var id=this.innerHTML;
  console.log(id);
  switch(id)
  {
    case "1":
        song1.pause();
        break;
      case "2":
        song2.pause();
        break;
      case "3":
        song3.pause();
        break;
      case "4":
        song4.pause();
        break;
        default:
          console.log("wrong input");
          break;
  }
  
}


  </script>
<marquee><p style="color:whitesmoke;font-size:20px;fontistyle:italic;font-family: Coronetscript, cursive;">single click play and double click pause</p></marquee>

</body>
</html>
