<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<table width="1050" height="37" border="1">
  <tr>
    <th width="944" scope="col">
	<table width="500" height="77" border="1">
	<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="checkUser.php">
      <tr>
        <th colspan="2" scope="col">Login</th>
        </tr>
      <tr>
        <td width="155">User Name </td>
        <td width="329">
          <label>
            <input name="username" type="text" id="username" />
            </label>
        
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input name="userpass" type="text" id="userpass" /></td>
      </tr>
	  <tr>
        <td>Image</td>
        <td><input name="studentPhoto" type="file"></td>
	  </tr>
	  <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="submit" name="Submit" value="Submit" />
          <input type="reset" name="Submit2" value="Reset" />
        </label></td>
	  </tr>
	  </form>
    </table></th>
  </tr>
</table>
</body>
</html>
