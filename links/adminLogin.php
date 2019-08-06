<?php
header('Pragma: no-cache');
session_start();
include('Connection.php');
$query="select adminId,userName,password from adminlogin where userName='".$_POST['username']."' and password='".$_POST['pass']."' ";
$obj= new Connection();
$obj -> checkLogin($query);
$abc = $obj -> checkLogin($query);
$uid=$abc[0];
$uname=$abc[1];
$upass=$abc[2];
//echo $uid;
//echo $uname;
//echo $upass;
if($_POST['username']== $uname && $_POST['pass']==$upass)
{
	//echo 'match';
	$_SESSION["id"]=$uid;
	header('Location:view.php'); 
}
else
{
	//echo 'not match';
	session_destroy();
	header('Location:../index.php?message=1');
	
}
?>