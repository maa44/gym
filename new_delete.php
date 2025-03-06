<?php
include("header.php");

$id=$_GET["id"];
$fileurl="";

$link=mysqli_connect("localhost","root","","gym");
$result=mysqli_query($link,"SELECT * FROM `new` WHERE id=$id");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row){
    $fileurl=$row["imageurl"];
}

$delete=unlink($fileurl);
if($delete==true){
    $link=mysqli_connect("localhost","root","","gym");
    $result=mysqli_query($link,"DELETE FROM `new` WHERE id=$id");
    mysqli_close($link);
    
    if($result===true)
    {
        ?>
        <script>
            location.replace("admin.php");
        </script>
        <?php
    }else
    {
        echo("در عملیات ثبت نام مشکلی پیش آمده");
    }
}

include("footer.html");
?>