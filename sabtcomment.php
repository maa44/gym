<?php
$tcom=$_POST["textcom"];
$pid=$_GET['id'];
$s=mysqli_connect("localhost" , "root" , "" , "gym");
mysqli_query($s,"INSERT INTO `comment`(`text`,`newid` ) VALUES ('$tcom','$pid')");

if($tcom == ""){
    ?>
    <script>
          alert("لطفاً دیدگاه خود را ثبت کنید");
    </script>
    <?php }else{
        ?>
<script>
    location.replace("detail.php?id=<?php echo($pid);?>");
</script>
<?php }
mysqli_close($s);
?>