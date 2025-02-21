<?php
include("header.php");
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","gym");
$b=mysqli_query($a,"SELECT * FROM `city`WHERE `id`=$id");
mysqli_close($a);
$row=mysqli_fetch_array($b)
?>



<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card bg-dark">
          <div class="card-header text-center bg-primary text-white">
            <h4>ویرایش شهر</h4>
          </div>
          <form class="m-4 d-flex gap-2 " action="cityedit_action.php" method="post">
    <input type="text" name="name" value="<?php echo($row["city"]);?>"  >
    <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
    <input type="submit"  value="ثبت ویرایش" class="card bg-dark text-primary">
    <a dir="ltr" href="city.php"><button class="bg-dark text-primary">برگشت به لیست شهر ها</button></a>
    </form>
        </div>
      </div>
    </div>
</body>