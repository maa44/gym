
<?php
include("header.html");
$id=$_POST["id"];
$name=$_POST["name"];
$a=mysqli_connect("localhost","root","","gym");
$b=mysqli_query($a,"UPDATE `city` SET `city`='$name' WHERE `id`='$id';");
mysqli_close($a);
?>
<?php
 if($b===true)
 {
    
 ?>
 
    <script>
    location.replace("city.php");
 </script>   
  
 <?php

}else
echo("خطا");
?>