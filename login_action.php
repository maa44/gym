<?php
include("header.php");
?> 
<?php
$email=$_POST["email"];
$password=$_POST["password"];
$c=mysqli_connect("localhost","root","","gym");
$result=mysqli_query($c,"SELECT * FROM `user` WHERE `email`='$email'and`password`='$password'");
$row=mysqli_fetch_array($result);
if($row){
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];
    ?>
    <script>
        alert("ورود موفقیت آمیز");
    location.replace("index.php");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("...دقت کنید");
        location.replace("login.php");
    </script>
    
    <?php
}
mysqli_close($c);
?>

<?php
include("footer.html");
?>