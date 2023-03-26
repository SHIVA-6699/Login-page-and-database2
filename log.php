<?php
$connect=mysqli_connect("localhost","root","","login") or die ("conncetion failed");
if(!empty($_POST['logins']))
{
    $user=$_POST['usernames'];
    $pass=$_POST['passwords'];
    $query="select * from register where email='$user' and password='$pass'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        echo '<script>alert("login success");
        location="mon.htm";
        </script>
        ';
    }
    else
    {
        echo '<script>alert("Invalid password or username");
        location="index.htm";
        </script>';
    }
}
?>