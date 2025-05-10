
<?php
include("header.php");


$link=mysqli_connect("localhost","root","","gym");
$result=mysqli_query($link,"SELECT * FROM `new`");
mysqli_close($link);

$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row mt-4 md-4">
        <?php  while($row){ ?>
        <div class="col col-md-4">
          <div class="card shadow">
            <a href="shownews.php?id=<?php echo($row['id'])?>"><img src="<?php echo($row["imageurl"]);?>" class="card-img-top"></a>
            <div class="card-body">
              <h5 class="card-title"><?php echo($row["title"]);?></h5>
              <p class="card-text"><?php echo(substr($row["text"],0,120));?>..</p>
                <p class="card-text"><small class="text-body-secondary">آخرین آپدیت <?php echo $row['created at']; ?></small></p>
                </div>
          </div>
        </div>
<?php
$row=mysqli_fetch_array($result);
}}
?>
<?php
include("footer.html");
?>
  