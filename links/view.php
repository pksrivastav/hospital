<?php session_start(); ?>
<?php include('Connection.php'); ?>
<?php
if(!isset($_SESSION['id']))
{
exit('<meta http-equiv="refresh"' . 'content="0;URL=../index.php">');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$query ="select adminId, userName,password from adminlogin";
$obj = new Connection();
$obj -> viewPage($query);
$abc = $obj -> viewPage($query);

?>
<body>
<table width="1146" height="125" border="1">
  <tr>
    <th scope="col"><table width="509" border="1">
      <tr>
        <th colspan="2" scope="col">View Details </th>
        <th scope="col"><a href="logout.php">logout</a></th>
      </tr>
      <tr>
        <td width="153">Id</td>
        <td width="140">User Name </td>
        <td width="194">Password</td>
      </tr>
	  <?php
	  foreach($abc as $value)
	  {
	  ?>
	 <tr>
        <td width="153"><?php echo $value[0]; ?></td>
        <td width="140"><?php echo $value[1]; ?> </td>
        <td width="194"><?php echo $value[2]; ?></td>
      </tr>
	  <?php
	  }
	  ?>
	  
    </table></th>
  </tr>
</table>
</body>
</html>
