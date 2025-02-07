<?php
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","gym");
$b=mysqli_query($a,"DELETE FROM `city` WHERE `id`=$id");
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

}
?>