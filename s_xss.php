<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>x_xss</title>
</head>

<body>
    <?php
if(isset($_GET['search'])){
    // منع الهكر من وضع سكريبت اليرت فى البحث
    $lr=filter_var($_GET['search'],FILTER_SANITIZE_STRING);
    echo $lr ;
}

//FILTER_SANITIZE_NUMBER_INT بيبعت ارقام فقط 
//FILTER_VALIDATE_EMAIL تاكد الى مكتوب ايميل فعلا ولا لا
?>
</body>

</html>