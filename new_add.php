<?php
include("header.php");
?>
    <div class="container" style="margin-top: 7rem;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-primary text-white">
            <h4>افزودن اخبار</h4>
          </div>
          <div class="card-body shadow-lg bg-dark">
            <form action="new_add_action.php" method="post" enctype="multipart/form-data">
              <div class="mb-3">
                <label class="form-label">تصویر</label>
                <input type="file" name="image" class="form-control text-start">
              </div>
              <div class="mb-3">
                <label class="form-label">عنوان</label>
                <input type="text" name="title" class="form-control" placeholder="عنوان مورد نظر">
              </div>
              <div class="mb-3">
                <label class="form-label">متن </label>
                <textarea type="text" name="text" class="form-control" placeholder="متن را وارد کنید"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">‌ذخیره</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
include("footer.html");
?>