<?php 
session_start();                   
if(isset($_SESSION['admin']))
{
    header("Location:admin.php");    
    exit();
}                       

$username=$_POST['username'];    
$password=$_POST['password'];


if ($username=='admin' and $password=='123456')
{
    //session_register('admin');       
    $_SESSION['admin'] = true;
    //$admin_ = $username;
    
    echo "<font color=red>Log in success!</font>";
    //sleep(5);
    header ("Location:admin.php");    //redirection
}
else
{
    echo "<table width='100%' align=center><tr><td align=center>";
    echo "Wrong Username or Password<br>";
    echo "<font color=red>Login failure!</font><br><a href='login.php'>Please retype your login infomation!</a>";
    echo "</td></tr></table>";
}
?>
