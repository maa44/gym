<?php
include("header.php");

// $image=$_POST["image"];
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];

$flagSaveOk=true;
$message="";

$imageurl="img/".$image;

if(file_exists($imageurl)){
    $flagSaveOk=false;
    $message.="فایل مشابه در سرور وجود دارد";
}

// $size=getimagesize($_FILES["image"]["tmp_name"]);
// if($size>500000000){
// $flagSaveOk=false;
// $message.="اندازه فایل بزرگتر از 5 مگابایت است";
// }

$extention=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
if($extention!="jpg" && $extention!="png" && $extention!="gif"){
    $flagSaveOk=false;
    $message.="نوع فایل باید gif یا jpg یا png باشد";
}

$upload=move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
if($upload==false){
    $flagSaveOk=false;
    $message.="در آپلود فایل مشکل پیش آمد";
}

if($flagSaveOk){
    $link=mysqli_connect("localhost","root","","gym");
    $result=mysqli_query($link,"INSERT INTO `new`(`title`, `text`, `imageurl`) VALUES ('$title','$text','$imageurl')");
    mysqli_close($link);
    
    if($result===true)
    {
        ?>
        <script>
            location.replace("admin.php");
        </script>
        <?php
    }else
    {
        echo("در عملیات ثبت نام مشکلی پیش آمده");
    }
}else{
    echo($message);
}



include("footer.html");
?>