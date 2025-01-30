<?php
include("header.html");
?>
<?php
$name=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmPassword"];
$c=mysqli_connect("localhost","root","","gym");
mysqli_query($c,"INSERT INTO `user`( `user name`, `email`, `password`) VALUES ('$name','$email','$password');");
mysqli_close($c);
if( $name!=0&& $email!=0 && $password!=0 && $confirmpassword!=0 )
echo("نام کاربری شما با موفقیت ایجاد شد");
else
echo("تمام جاهای خالی را پرکنید");
?>

<?php
include("footer.html");
?>