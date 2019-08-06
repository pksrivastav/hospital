<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="817" height="66" border="1">
  <tr>
    <th scope="col"><table width="387" border="1">
	<form id="form1" name="form1" method="post" action="./links/adminLogin.php">
      <tr>
        <th colspan="2" scope="col">AdminLogin</th>
        </tr>
      <tr>
        <td width="143">User Name </td>
        <td width="228"><label>
          <input name="username" type="text" id="username" />
        </label>        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input name="pass" type="text" id="pass" /></td>
      </tr>
	  <?php
	  if(isset($_GET['message']))
	  {
 		$message="Invalid User Name or Password";
	  }
	  ?>
	   <tr>
        <td colspan="2"><?php echo $message;?></td>
        </tr>

      <tr>
        <td>&nbsp;</td>
        <td>
          <input type="submit" name="Submit" value="Submit" />
          <input type="reset" value="Reset" />
        </td>
      </tr>
	  </form>
    </table></th>
  </tr>
</table>
</body>
</html>
