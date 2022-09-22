<?php
$name=$_POST['name'];
$city=$_POST['city'];
$comments=$_POST['comments'];


$con = mysqli_connect("localhost","root","","test");
$sql="INSERT INTO register(name,city,comments) values('$name','$city','$comments')";
$r=mysqli_query($con,$sql);
if($r){
	echo "Updated successfully";
}
else {
	echo "fail";
}


?> 



