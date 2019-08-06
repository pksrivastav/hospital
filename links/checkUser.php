<?php
include('Connection.php');
$uname= $_POST['username'];
$upaas =$_POST['userpass'];
//echo $uname;
//echo $upaas;
$query="Insert into adminlogin(userName,password) values('".$uname."','".$upaas."')";
//echo $query;
$obj=new Connection();
$obj->qryInserted($query);
$q2="select LAST_INSERT_ID()";
$res2=mysql_query($q2);
$row2=mysql_fetch_row($res2);
$studentId=$row2[0];

if(!empty($_FILES['studentPhoto']['name']))
{
    $uploaddir="../studentPhoto/";
    $destination=$uploaddir."studentPhoto".$studentId.".jpg";
       /*== move file to proper directory ==*/
    if(!move_uploaded_file($_FILES['studentPhoto']['tmp_name'],$destination)) 
    {
      /*== if an error occurs the file could not be written, read or possibly does not exist ==*/
      exit("Error Uploading File.");
    }
}
header('Location: view.php');
?>
