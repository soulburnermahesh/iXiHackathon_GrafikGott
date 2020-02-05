<?php
require "config.php";
$id=$_POST["id"];
$url=$_POST["url"];
$title=$_POST["title"];
$desc=$_POST["description"];
$keyword=$_POST["keyword"];
$mysql_query="insert into sites (id,url,title,description) values ('".$id."','".$url."','".$title."','".$desc."');";
if($con->query($mysql_query)!=0){
	echo "insert successful";
}
else{
	echo "VALUE NOT INSERTED";
}
//$con->close();
?>