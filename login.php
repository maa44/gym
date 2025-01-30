<?php
include("header.html");
?>

<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-primary text-white">
            <h4>ورود</h4>
          </div>
          <div class="card-body bg-dark">
            <form>
              <div class="mb-3">
                <label for="email" class="form-label">ایمیل</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل خود را وارد کنید">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="رمز عبور خود را وارد کنید">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label text-light" for="remember">مرا به خاطر بسپار</label>
              </div>
              <button type="submit" class="btn btn-primary w-100">ورود</button>
            </form>
          </div>
        </div>
        <div class="text-center mt-3">
          <p>حساب کاربری ندارید؟ <a class="text-info" href="singup.php">ثبت‌ نام</a></p>
          <p><a class="text-info" href="#">رمز عبور خود را فراموش کرده‌اید؟</a></p>
        </div>
      </div>
    </div>
  </div>
<?php
include("footer.html");
?>
  