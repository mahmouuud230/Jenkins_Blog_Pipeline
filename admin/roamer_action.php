<?php
include('authentication.php');

if(isset($_POST['roamer'])){

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $new_img_name = $_POST['old_image'];
    if($_FILES['image']['name'] != null){
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
    
        if($image_size <= 12500000000000){
        $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_exs = array("jpg", "jpeg", "png");
            if(in_array($image_extension, $allowed_exs)){
                $new_img_name = uniqid('IMG-', true).'.'.$image_extension;
                $img_upload_path = '../uploads/posts/'.$new_img_name;
            }else{
                $_SESSION['message'] = "You can't upload file of this type";
                header('location: post-edit.php');
                exit(0);
            }
        }else{
            $_SESSION['message'] = "The file is larger than 1mb";
            header('location: post-edit.php');
            exit(0);
        }
    }
    
        
    $sql = "UPDATE admin SET name = '$name', email = '$email', description  = '$description', image = '$new_img_name' WHERE id = '0';";
    

    $query_run = mysqli_query($con, $sql);

    if($query_run){
        move_uploaded_file($tmp_name, $img_upload_path);
        $_SESSION['message'] = "Updated Roamer Successfuly";
        header('location: roamer.php');
        exit(0);
    }else{
        $_SESSION['message'] = "Some thing Went Wrong!";
        header('location: post-add.php');
        exit(0);
    }
}

?>
