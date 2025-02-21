<?php
include("header.php");
?>
<?php
$name=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmPassword"];
$c=mysqli_connect("localhost","root","","gym");
mysqli_query($c,"INSERT INTO `user`( `user name`, `email`, `password`) VALUES ('$name','$email','$password');");
mysqli_close($c);
if( $name!=0&& $email!=0 && $password!=0 && $confirmpassword!=0 ){
?>
<script>
    alert("نام کاربری شما با موفقیت ایجاد شد ");
location.replace("index.php");
</script>
<?php
}
else{
    ?>
    <script>
        alert("تمام جاهای خالی را پرکنید ");
        location.replace("login.php");
    </script>
    
    <?php
}

?>

<?php
include("footer.html");
?>