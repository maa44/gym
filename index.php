
<?php
include("header.php");


$link=mysqli_connect("localhost","root","","gym");
$result=mysqli_query($link,"SELECT * FROM `new`");
mysqli_close($link);

$row=mysqli_fetch_array($result);
while($row){
?>

<div class="row card m-1">
    <img class="col-12 col-md-6 card-image mt-1" src="<?php echo($row["imageurl"]); ?>" >
    <span class="col-12 m-2 h5"><?php echo($row["title"]);?></span>
    <p class="card-text"><?php echo(substr($row["text"],0,120));?>..</p>
    <b><a href="detail.php?id=<?php echo ($row['id']) ?>" style="text-decoration: none;">توضيحات تكميلي</a></b></div>

<?php
$row=mysqli_fetch_array($result);
}
?>
<?php
include("footer.html");
?>
  