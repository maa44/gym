<?php
include("header.php");
?>
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-primary text-white">
            <h4>لیست شهر ها</h4>
          </div>
          <div class="card-body shadow-lg bg-dark">
         
          <?php
$a=mysqli_connect("localhost","root","","gym");
$b=mysqli_query($a,"SELECT * FROM `city`");
mysqli_close($a);
?>
<?php
$row=mysqli_fetch_array($b);
while($row)
{
 ?>
 <div class="row">
 <div class="col text-white">
 <button class="bg-dark"><a href="cityedit.php?id=<?php echo($row["id"]); ?>">ویرایش</a></button>
<button class="bg-dark"><a href="citydelete.php?id=<?php echo($row["id"]); ?>">حذف</a></button>
<span>
    <?php echo($row['city']); ?>
</span>
</div>
</div>
 <?php
 $row=mysqli_fetch_array($b);

}
?>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>