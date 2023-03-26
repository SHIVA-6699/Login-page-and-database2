<?php
$con=new mysqli("localhost","root","","login");
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
}
$sql="select * from register";
$res=$con->query($sql);
echo $res->num_rows;
$con->close();
?>