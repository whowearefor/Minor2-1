<?php
$a=$_REQUEST['email'];
$b=$_REQUEST['psw'];
require("connect.php");

$q= "select * from login_info where email = '$a' and password ='$b'";
$res=mysqli_query($con,$q) or die ("Invalid query");
if (mysqli_num_rows($res)>0)
{
  echo "Login successful";
//  $_SESSION['username'] =$usr;
}
else {
  echo "Use valid credentials";
}
$row=mysqli_fetch_array($res);
if($row['utype']=="admin")
{
//echo "<meta http_equiv ="refresh" content ="2;url = admin.php">";

}
else {
//echo "<meta http-equiv ="refresh" content ="2;url= user.php">";
}
/*$q="select register.uname, register.upass,register.utype from registers inner join login_info regiter.uname=login_info, register.upass=login_info.upass";
mysqli_query($con,$q) or die ("couldnt join");
echo "join successful";*/


?>
