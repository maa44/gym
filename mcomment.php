<?php
include("header.php");
?>
<div class="row text-center text-light" style="margin-top: 8rem;">
    <h4 class="col mb-5">دیدگاه ها</h4>
</div>
<?php
            $link=mysqli_connect("localhost","root","","gym");
            $result=mysqli_query($link, "SELECT `text`, `time`, `id` FROM `comment` WHERE `sabt`<1");
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
                        <a class="btn btn-success" href="comment_accept.php?id=<?php echo($row["id"]); ?>">✅</a>
                        <a class="btn btn-danger mb-2" href="comment_delete.php?id=<?php echo($row["id"]); ?>">✖️</a>
                    </div>
                    <?php
             $row=mysqli_fetch_array($result);
             }
             ?>
                     <?php mysqli_close($link); ?>
                </div>
            </div>