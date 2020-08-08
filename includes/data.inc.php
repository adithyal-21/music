<?php 
$conn=mysqli_connect("localhost","root","","music");
if(!$conn)
{
die("server noy respond" .mysqli_connect_error());
}