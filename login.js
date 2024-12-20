function ngh(){
    
    a=0;
    b=0;
    c=0;
    a=document.getElementById("exampleFormControlInput1").value;
    b=document.getElementById("inputPassword5").value;
    c=document.getElementById("inputPassword5").value;
   
      if( a!=0 && b!=0 && c!=0){
        if(c==b){
        alert("نام کاربری شما با موفقیت ایجاد شد");
        alert(a)
        alert(b)
    }else
    alert("در تکرار رمز دقت کنید");
}
    else 
    alert("تمام جاهای خالی را پرکنید");
}