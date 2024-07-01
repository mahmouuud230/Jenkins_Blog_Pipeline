<?php
include('authentication.php');

if(isset($_POST['post_add'])){

    $category_id = $_POST['category_id'];

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $slug = mysqli_real_escape_string($con, $_POST['slug']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword = mysqli_real_escape_string($con, $_POST['meta_keyword']);

    if(isset($_FILES['image'])){
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
    
    $status = 0;
    if(isset($_POST['status'])){
        $status = 1;
        }
        
    $sql = "INSERT INTO posts(category_id, name, slug, description, image, meta_title, meta_description, meta_keyword, status)
    VALUES ('$category_id','$name','$slug', '$description', '$new_img_name', '$meta_title', '$meta_description', '$meta_keyword', '$status')";

    $query_run = mysqli_query($con, $sql);

    if($query_run){
        move_uploaded_file($tmp_name, $img_upload_path);
        $_SESSION['message'] = "Post Created Successfuly";
        header('location: post-add.php');
        exit(0);
    }else{
        $_SESSION['message'] = "Some thing Went Wrong!";
        header('location: post-add.php');
        exit(0);
    }
}

?>
