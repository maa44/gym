<?php
include("header.html");
?>
<section id="d6" class="col-8 bg-info list-inline m-5 ">

   <div class="col-5 m-5">
   <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>


<label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" class="form-control " aria-describedby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text ">
رمز عبور شما باید 8 تا 20 کاراکتر داشته باشد، دارای حروف و اعداد باشد و نباید دارای فاصله، کاراکترهای خاص یا ایموجی باشد.  
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" onclick="ngh()" id="log">Confirm identity</button>
  </div>
     
<script src="login.js"></script>
<?php
include("footer.html");
?>
  