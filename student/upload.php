<?php
if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
     
    move_uploaded_file($file_tmp, "images/".$file_name);
    echo "success";
}
?>
<html>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" id="" />
            <br><br>
            <input type="submit" name="submit" />
        </form>
    </body>
</html>