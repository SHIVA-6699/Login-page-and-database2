<?php
$con=mysqli_connect("localhost","root","","login");
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$phone=$_POST['phone'];

if($con->connect_error)
{
    die("connecton failed".$con->connect_error);
}
else
{
    $query=$con->prepare("insert into register(email,password,name,phone) values(?,?,?,?)");
    $query->bind_param("sssi",$username,$password,$name,$phone);
    $query->execute();
    echo '<script type="text/javascript">

    window.onload = function () { 
        
        alert("Register succssfully......"); 
        location="index.htm";
    
    }
   

</script>';
    
    
    $query->close();
    $con->close();
}
?>