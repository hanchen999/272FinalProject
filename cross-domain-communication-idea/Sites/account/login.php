<input type ="button" onclick="javascript:location.href='../index.php'" value="Back to homepage"></input>
<?php
session_start(); //Initialize session

if(isset($_SESSION['admin']))
{    
    header("Location:admin.php"); //redirection
    exit();
}
?>
<script language="javascript">
function checklogin(){
    if((login.username.value!="")&&(login.password.value!=""))
    {
       return true;
    }
    else
    {
        alert("Username or Password can not be empty!");
    }
}
</script>

<style type="text/css">
.style1 { font-size: 13px;  font-family: "SimHei";  font-weight: normal;   color: #0099 FF; }
</style>

<div align="center">
<form name="login" method="post" action="checklogin.php" onSubmit="return checklogin()">
<table width="260" border="1" bgcolor="#D8EFFA">
<tr align="center">
<td height="30" colspan="2"><span class="style1">Log in</span></td>
</tr>

<tr>
<td width="90" align="center" class="style1">Username: </td>
<td width="170" height="20" align="left" valign="middle"><input name="username" type="text" id="username" size="20"></td>
</tr>

<tr>
<td align="center" class="style1">Password: </td>
<td height="20" align="left" valign="middle"><input name="password" type="password" id="password" size="20"></td>
</tr>

<tr>
<td align="center" class="style1"></td>
<td height="20" align="center"><input type="submit" name="Submit" value="Submit"></td>
</tr>

</table>
</form>
</div>
