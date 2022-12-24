<form action="" method="POST" enctype="multipart/form-data">
    <input name="file" type="file" />
    <button name="upload">upload</button>
</form>
<style>
* {
    text-align: center;
    font-size: 20pt;
    margin-top: 10px;
}
</style>

<?php

if(isset($_POST['upload'])){
    $file_name=$_FILES['file']['name'];
    $file_size=$_FILES['file']['size'];
    $file_tmp=$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type'];

   /* echo $file_name."<br>";
    echo $file_size."<br>";
    echo $file_tmp."<br>";
    echo $file_type."<br>";
    */
    $allowed_extensions=array('jpg','png','jpeg');
    $image_extension=end(explode('.',$file_name));
     $image_name=rand(0,1000000) . '.' . $image_extension ;
if (in_array($image_extension,$allowed_extensions)){
    echo "yes" ;
    if($file_size>9910024){
        echo "الحجم كبير اوى";
    }
}
else {
    echo "no";
}



}

?>