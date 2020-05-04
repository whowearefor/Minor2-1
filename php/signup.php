<?php
include("connect.php");
$em=$_REQUEST['email'];
$psw=$_REQUEST['psw'];
$q="INSERT INTO `login_info` (`email`, `password`) VALUES ('$em', '$psw')";
mysqli_query($con,$q) or die ("invalid query");
echo "record saved";
/*$q="select register.uname, register.upass,register.utype from registers inner join login_info regiter.uname=login_info, register.upass=login_info.upass";
mysqli_query($con,$q) or die ("couldnt join");
echo "join successful";*/

 ?>
