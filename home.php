Copy of home.php
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php include('form.css') ?>
</head>
<script language="javascript">
function abc()
{
if(document.form1.t1.value=="" || document.form1.t2.value=="")
{
alert("Please enter the User ID and Password");
return(false);

}


}

</script>
<?php include("mainhead.htm") ?>
<?php include("background.htm") ?>
<?php include("homemenu.htm") ?>
<body>

<table width="1243" height="705" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="929" height="71">&nbsp;</td>
    <td width="290">&nbsp;</td>
    <td width="24">&nbsp;</td>
  </tr>
  <tr>
    <td height="241">&nbsp;</td>
    <td valign="top"><form name="form1" onSubmit="return abc()" method="post" action="home1.php">
	  <h1>Login</h1>      
        <table width="98" height="122" border="0" align="center">
          <tr>
            <td width="92"><input name="t1" placeholder="User ID" type="text" id="t1"></td>
          </tr>
          <tr>
            <td><input name="t2" type="password" placeholder="Password" id="t2"></td>
          </tr>
          <tr>
            <td height="44"><div align="center">
                <input type="submit" name="Submit" value="Sign in">
                <br>
                <br>
            <a href="fpass1.php" id="fp">Forget Password</a></div></td>
          </tr>
        </table>
    </form>      <p>&nbsp;</p></td>
  <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="393">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>