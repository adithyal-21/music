<!DOCTYPE html>
        <html lang="en">
        <head>
          <title>player</title>
          <link href="playdes.css" rel="stylesheet">
          <link rel="icon" href="logo/sound.png" type="image/x-icon">
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
          <style>
          .songtitles{
    color:whitesmoke;
    width:300px;
    background-color:black;
    text-align: center;
    position: absolute;
    left:14%;
    bottom:33%;
    font-family:Coronetscript, cursive;
    height:30px;
    border-radius:25px;
    
    }
    .plays,.pre,.next
    {
    cursor: pointer;
    }
    .buttons{
        position:relative;
       text-align:center;
       margin-bottom:60px;
      
      
    }
    .plays{
        border-radius: 30%;
        background-color:black;
    }
    .pre{
       
        position: absolute;
        right:260px;
        border-radius: 30%;
        background-color: black;
       
    }
    .next{
       
        position: absolute;
        left:260px;
        border-radius: 30%;
        background-color: black;
    }
    .seeks{
        width: 300px;height: 5px;
    background-color: whitesmoke;border-radius:50px;
    cursor: pointer;display: flex;margin-left:50px;
    position:absolute;bottom:13%;
    }
    .fills
    {
        height: 5px;background-color:royalblue;border-radius:20px;
    }
    .handles{
        width:8px ;height: 5px;background-color: royalblue;border-radius: 50%;
        margin-left: -5px;transform: scale(2);
    }
    .tim{
        color: whitesmoke;
        font-family:Coronetscript, cursive;
        position: absolute;
        top:88%;
      left: 15%;
      font-size:13px;
    }
    .min{
        position: absolute;
        right:130px;
        cursor: pointer;
        border-radius: 30%;
        background-color: black;
        bottom:-1%;
        right:120px;
    }
    .spe{
        position: absolute;
        right:80px;
        border-radius: 30%;
        background-color: black;
        bottom:-1%;
        right:65px;
        
    }
    .add{
        position: absolute;
        right:30px;
        cursor: pointer;
        border-radius: 30%;
        background-color: black;
        bottom:-1%;
        right:10px;
    }
    .pl{
        position: absolute;
        left:10px;
        cursor: pointer;
        border-radius: 30%;
        background-color: black;
        bottom:-1%;
    }
    .re{
      position: absolute;
        left:65px;
        cursor: pointer;
        border-radius: 30%;
        background-color: black;
        bottom:-1%;
    }
        
          </style>
          </head>

          <body style="background:url(photo/back4.jpg)no-repeat;background-position:fixed;background-size:cover">
           
          <div class="container" style="height:620px;width:430px;border:solid 3px black;position:relative;margin-top:40px;border-radius:30px;-webkit-box-shadow:-1px 4px 26px 11px black;-maz-box-shadow:-10px 4px 26px 15px  black;box-shadow:  -1px 3px 26px 18px  black;"">
          <div class="row">
          <div class="col-sm-12">
    <div id="image">
          
          <img src="photo/b.jpg" style="height:330px;width:430px;position:relative;left:-5%;margin-bottom:5px;border-radius:30px;">
    </div>
<br>
<div class="player"> <br>

    <div id="songtitle" class="songtitles" style="background:url(photo/back.jpg)no-repeat;background-position:fixed;background-size:cover">
    </div><br><br>

      <div class="buttons">
          <button class="pre" onclick="prev()"><img src="logo/back.png"></button>
          <button class="plays" id="play" onclick="playorpause()"><img src="logo/signs.png"></button>
          <button class="next" onclick="next()"><img src="logo/button.png"></button>
      </div><br>

        <div class="seeks"  id="seek" onclick="forward()">
            <div  class="fills" id="fill"></div>
            <div class="handles" id="handle"></div>
        </div>

            <div id="currentTime" class="tim">00:00/00:00
            </div><br>

               <div id="volume" class="vol">
                    <button  id="minus" class="min" onclick="decrease()"><img src="logo/lines.png"></button>
                    <button  id="speaker" class="spe"><img src="logo/communications.png"></button>
                    <button  id="plus" class="add" onclick="increase()"><img src="logo/signs (1).png"></button>
                    <button  id="playlist" class="pl" onclick="update()"><img src="logo/play-button.png"></button>
                    <button  id="repeat" class="re" onclick="repeat()"><img src="logo/repeat.png"></button>
                </div>
 </div>
   </div>
     </div>
       </div>
          
       <script>
    var songs=["musi/Deewani Mastani.mp3","musi/Gentleman.mp3","musi/Illegal Weapon.mp3","musi/Kalank.mp3","musi/LAGDI LAHORE DI.mp3",
    "musi/Lahu Munh Lag Gaya.mp3","musi/RAHUL.mp3","musi/sitharalla.mp3","musi/Mahabharat.mp3","musi/madhuram.mp3","musi/arjunreddy.mp3","musi/mehrama.mp3","musi/orudinam.mp3"];
    var poster=["photo/b.jpg"];
    var songtitle=document.getElementById("songtitle");
    var fillbar=document.getElementById("fill");
    var currentTime=document.getElementById("currentTime");
   
    var song=new Audio();
    var currentsong=0;
  window.onload=playsong;

  function playsong()
  {
    song.src=songs[currentsong];
    songtitle.textContent=songs[currentsong];
   
    song.play();
    $("#image img").attr("src","photo/gif2.gif");
  }


  function playorpause()
  {
    if(song.paused)
    {
      song.play();
      $("#play img").attr("src","logo/signs.png");
      $("#image img").attr("src","photo/gif2.gif");

    }
    else{
      song.pause();
      $("#play img").attr("src","logo/arro.png");
      $("#image img").attr("src","photo/b.jpg");
    }
    }
    function next()
    {
      currentsong++;
      console.log(currentsong);
      if(currentsong>=13)
      {
        currentsong=0;
      }
      playsong();
     
      $("#play img").attr("src","logo/signs.png");
      $("#image img").attr("src",poster[currentsong]);
     
    }

    function prev()
    {
      --currentsong;
      if(currentsong<0)
      {
        currentsong=13;
      }
      playsong();
      $("#play img").attr("src","logo/signs.png");
      $("#image img").attr("src",poster[currentsong]);
     
     
    }
    function repeat()
    {
      song.pause();
      song.src=songs[currentsong];
    song.play();
    }
    function decrease()
    {
      song.volume-=0.15;
    }


    function increase()
    {
      song.volume+=0.15;
    }

    song.addEventListener('timeupdate',function()
    {
      var position=song.currentTime / song.duration;
      fillbar.style.width=position * 100 + '%';
      convertTime(Math.round(song.currentTime));
      if(song.ended){
        next();
    }});


    function convertTime(seconds)
    {
      var min =Math.floor(seconds / 60);
      var sec=seconds % 60;
      min =(min<10) ? "0" +min:min;
      sec =(sec<10) ? "0" +sec:sec;
    currentTime.textContent=min + ":" +sec;
      totalTime(Math.round(song.duration));
    }


    function totalTime(seconds)
    {
      var min =Math.floor(seconds / 60);
      var sec=seconds % 60;
      min =(min<10) ? "0" +min:min;
      sec =(sec<10) ? "0" +sec:sec;
      
      currentTime.textContent +="/" +min + ":" +sec;
    }

    song.ontimeupdate=function(e)
      { 
        document.querySelector("#seek").onclick=function(e){
        var forward=e.offsetX/this.offsetWidth;
        song.currentTime=forward*song.duration;
      }
      }
   function update()
    {
        var input=document.createElement("INPUT");
     input.type="file";
        input.accept="mp3"
        input.click();
    }
    </script>

          </body>
          </html>