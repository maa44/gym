<?php
include("header.php");
?>
        <form class="row" action="new_add_action.php" method="post" enctype="multipart/form-data">
            <input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر">
            <input class="col-12 col-md m-2" type="text" name="title" placeholder="عنوان">
            <input class="col-12 col-md m-2" type="text" name="text" placeholder="متن">
            <input class="col-12 col-md m-2" type="submit" value="ذخیره">
        </form>
<?php
include("footer.html");
?>