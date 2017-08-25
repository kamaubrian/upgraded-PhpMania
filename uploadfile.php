<?php
    if(isset($_FILES['image'])){
        $errors =array();
        $file_name=$_FILES['image']['name'];
        $file_size=$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['temp_name'];
        $file_type =$_FILES['image']['type'];

        $file_ext= strtolower(end(explode('.',$_FILES['image']['name'])));
        $extensions = array("jpeg","jpg","png");
        if(in_array($file_ext,$extensions)==false){
            $errors[]="Extension is not Allowed, Please Chooise valid JPEG, Or PNG File";
        }
        if($file_size>2097152){
            $errors[]="File Size Should At Maximum of 2MB";
            if(empty($errors)==true){
                move_uploaded_file($file_tmp,"Home/Pictures".$file_name);
                echo "Success";
            }else{
                print_r($errors);
            }
        }
    }
?>