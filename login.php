<?php
require "config.php";
$user_name=$_POST["username"];
$user_pass=$_POST["password"];
$mysql_query="select*from login where username like '$user_name' and password like '$user_pass';";
//$result=mysqli_query($con,$mysql_query);
$result= $con->query($mysql_query);
if($result->fetch()>0){
	echo "login successful";
}
else{
	echo "login not successfull";
}

?>