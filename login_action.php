<?php
include("header.html");
?> 
<?php
$email=$_POST["email"];
$password=$_POST["password"];
$c=mysqli_connect("localhost","root","","gym");
$result=mysqli_query($c,"SELECT * FROM `user` WHERE `email`='$email'and`password`='$password'");
$row=mysqli_fetch_array($result);
if($row){
    echo("وارد شدید");
}else{
    echo("...دقت کنید");
}
mysqli_close($c);
?>
<?php
include("footer.html");
?>