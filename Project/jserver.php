<?php
session_start();
$username="";
$email="";
$errors=array();
$db=mysqli_connect("localhost","root","","registration");
if(isset($_POST["reg"]))
{
$username=$_POST["un"];
$email=$_POST["em"];
$p1=$_POST["p"];
$p2=$_POST["cp"];
if(empty($username))
{array_push($errors,"Username is required!!!");}
if(empty($email))
{array_push($errors,"Email  is required!!!");}
if(empty($p1))
{array_push($errors,"Password  is required!!!");}
if($p1 != $p2)
{array_push($errors,"Two passwords do not match!!!");}
if(count($errors) ==0)
{$password=md5($p1);
$sql="INSERT INTO users(username,email,password)
              VALUES('$username' , '$email' , '$password')";
mysqli_query($db,$sql);
$_SESSION['username']=$username;
$_SESSION['success']="WELCOME";
header('location: Homepage.html');
}
}
if(isset($_POST["un"]))
{
$username=$_POST["un"];
$pas=$_POST["p"];
if(empty($username))
{array_push($errors,"Username is required!!!");}
if(empty($pas))
{array_push($errors,"Password  is required!!!");}
if(count($errors) ==0)
{
$password=md5($pas);
$s="SELECT * FROM users WHERE username='$username' AND password='$password' ";
$r=mysqli_query($db,$s);
if(mysqli_num_rows($r)==1)
{
$_SESSION['username']=$username;
$_SESSION['success']="WELCOME";
header('location: Homepage.html');
}
else
{
array_push($errors,"The username/password combination is wrong");
}
}
}	
if(isset($_GET['logout']))
{
session_destroy();
unset($_SESSION['username']);
header('location: jlogin.php');
}
?>