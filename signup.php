<?php
include("header.php");
?>
   
   <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-primary text-white">
            <h4>ثبت نام</h4>
          </div>
          <div class="card-body bg-dark">
            <form action="signup_action.php" method="post">
              <div class="mb-3">
                <label for="username" class="form-label">نام کاربری</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="نام کاربری را وارد کنید">
              </div>
              <?php
              $a=mysqli_connect("localhost","root","","gym");
              $b=mysqli_query($a,"SELECT * FROM `city`");
              mysqli_close($a);
              ?> 
              <a href="citynew.php"><button type="button">+</button></a>
              <select class="mb-3" name="" id="">
              <?php
              $row=mysqli_fetch_array($b);
              while($row)
              {
              ?>
              <option value="">
              <?php echo($row["city"]);?>

              </option>
                <?php
                $row=mysqli_fetch_array($b);
                }
                ?>
              </select>
              <a href="city.php">نام شهر ها</a>
              <div class="mb-3">
                <label for="email" class="form-label">آدرس ایمیل</label>
                <input type="email"  class="form-control " name="email" id="email" placeholder="ایمیلتان را وارد کنید">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="رمز تان را وارد کنید">
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">تکرار رمز عبور</label>
                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="دوباره رمز تان را وارد کنید">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms">
                <label class="form-check-label text-light" for="terms">من با <a href="">شرایط و ضوابط</a class="text-light"> موافقم</a></label>
              </div>
              <button type="submit" class="btn btn-primary w-100" onclick="signup_action.php">ثبت نام</button>
            </form>
          </div>
        </div>
        <div class="text-center mt-3">
          <p class="text-dark">از قبل حساب کاربری دارید؟ <a class="text-info" href="login.php">وارد شوید</a></p>
        </div>
      </div>
    </div>
  </div>
  
<?php
include("footer.html");
?>