<?php
include("header.php");
$title="";
$text="";
$imageurl="";
if(isset( $_GET["id"])){

    $id=$_GET["id"];
    $link=mysqli_connect("localhost","root","","gym");
    $result=mysqli_query($link,"SELECT * FROM `new` WHERE `id`=$id");
    mysqli_close($link);
    $row=mysqli_fetch_array($result);
    if($row){
        $title=$row["title"];
        $text=$row["text"];
        $imageurl=$row["imageurl"];
    }
}
?>
   <div class="container" style="margin-top: 7rem;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-primary text-white">
            <h4>ویرایش</h4>
          </div>
          <div class="card-body shadow-lg bg-dark ">
            <form action="new_edit_action.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label">تصویر</label>
                <input class="form-control text-start" type="file" name="image" placeholder="تصویر" value="<?php echo($imageurl); ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">عنوان</label>
                <input class="form-control" type="text" name="title" placeholder="عنوان مورد نظر" value="<?php echo($title); ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">متن</label>
                <textarea class="form-control" type="text" name="text" placeholder="متن  را وارد کنید" value="<?php echo($text); ?>"><?php echo($text); ?></textarea>
              </div>
              <input class="col-12 col-md m-2" type="text" name="id" hidden placeholder="id" value="<?php echo($id); ?>">
              <button type="submit" class="btn btn-primary w-100">ذخیره</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
include("footer.html");
?>