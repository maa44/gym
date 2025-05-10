<?php
include("header.php");
$id=0;
$id=$_GET["id"];
if (isset($_GET['id']))
	 $id=$_GET['id'];

$link=mysqli_connect("localhost","root","","gym");
$result=mysqli_query($link,"SELECT * FROM `new` WHERE id='$id'");
mysqli_close($link);

$row=mysqli_fetch_array($result);
while($row){
?> 

<div class="row card m-1">
    <img class="col-12 col-md-6 card-image mt-1" src="<?php echo($row["imageurl"]); ?>" >
    <span class="col-12 m-2 h5"><?php echo($row["title"]);?></span>
    <span class="col-12 m-2"><?php echo($row["text"]); ?></span>
</div>

<?php
$row=mysqli_fetch_array($result);
}
?>

<div class="row" style="margin-top: 10rem;">
            <div class="col-12">
                <h2 class="text-light">نظرات کاربران</h2>
                <!-- <ul class="list-group mt-3">
                          <li class="list-group-item">نظر شماره ۱: این صفحه بسیار مفید بود.</li>
                          <li class="list-group-item">نظر شماره ۲: طراحی بسیار زیبا و کارآمد است.</li>
                          <li class="list-group-item">نظر شماره ۳: لطفاً موارد بیشتری اضافه کنید.</li>
                      </ul> -->
        <form class="mt-4" method="post" action="sabtcomment.php?id=<?php echo($id); ?>">
          <div class="mb-3">
            <label for="userComment" class="form-label">نظر خود را بنویسید:</label>
            <textarea class="form-control" name="textcom" id="userComment" rows="3"
              placeholder="نظر خود را اینجا بنویسید..."></textarea>
          </div>
          <button type="submit" class="btn btn-outline-dark">ارسال نظر</button>
        </form>
            </div>
            <?php
            $link=mysqli_connect("localhost","root","","gym");
            $result=mysqli_query($link, "SELECT `text`, `time`, `sabt` FROM `comment` WHERE newid = $id AND sabt = 1");
            $row=mysqli_fetch_array($result);
            ?>
            <div class="container mt-5">
                <div class="row">
                    <?php
                while($row){
                    ?>
                    <div class="card col-12 mb-2">
                        <p class="fs-5"><?php echo($row['text']) ?></p>
                        <p class="card-text"><small class="text-body-secondary">تاریخ ثبت: <?php echo $row['time']; ?></small></p>
                    </div>
                    <?php
             $row=mysqli_fetch_array($result);
             }
             ?>
                     <?php mysqli_close($link); ?>
                </div>
            </div>

        </div>
<?php
include("footer.html");
?>