<?php
include("header.html");
$name=$_POST["name"];
$a=mysqli_connect("localhost","root","","gym");
$b=mysqli_query($a,"INSERT INTO `city`(`city`) VALUES ('$name');");
mysqli_close($a);
?>
<?php
if($b)
{
 ?>
 <script>
    location.replace("signup.php");
 </script>   
 <?php
}else
echo("خطا");
?>
