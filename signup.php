<?php
include("header.html");
?>
   
   <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header text-center bg-primary text-white">
            <h4>ثبت نام</h4>
          </div>
          <div class="card-body bg-dark">
            <form>
              <div class="mb-3">
                <label for="username" class="form-label">نام کاربری</label>
                <input type="text" class="form-control" id="username" placeholder="نام کاربری را وارد کنید">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">آدرس ایمیل</label>
                <input type="email"  class="form-control " id="email" placeholder="ایمیلتان را وارد کنید">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" id="password" placeholder="رمز تان را وارد کنید">
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">تکرار رمز عبور</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="دوباره رمز تان را وارد کنید">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terms">
                <label class="form-check-label text-light" for="terms">من با <a href="">شرایط و ضوابط</a class="text-light"> موافقم</a></label>
              </div>
              <button type="submit" class="btn btn-primary w-100">ثبت نام</button>
            </form>
          </div>
        </div>
        <div class="text-center mt-3">
          <p class="text-dark">از قبل حساب کاربری دارید؟ <a class="text-info" href="login.html">وارد شوید</a></p>
        </div>
      </div>
    </div>
  </div>
  
<?php
include("footer.html");
?>