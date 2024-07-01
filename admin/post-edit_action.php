<?php
include('authentication.php');
// echo$_POST['post_edit'];
// echo$_POST['name'];
// echo$_POST['slug'];
// echo$_POST['description'];
// echo$_POST['meta_title'];
// echo$_POST['meta_description'];
// echo$_POST['meta_keyword'];
// echo$_POST['status'];
// echo "<pre>";
// print_r($_FILES['image']);
// echo "</pre>";
if(isset($_POST['post_edit'])){

    $id = $_POST['post_edit'];
    $category_id = $_POST['category_id'];

    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];

    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];

    $new_img_name = $_POST['old_image'];
    $old_img = $new_img_name;        
    if($_FILES['image']['name'] != null){
        $image_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
    
        if($image_size<125000*2){
        $image_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_exs = array("jpg", "jpeg", "png");
            if(in_array($image_extension, $allowed_exs)){
                $new_img_name = uniqid('IMG-', true).'.'.$image_extension;
                $img_upload_path = '../uploads/posts/'.$new_img_name;
            }else{
                // echo$image_extension;
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
        
    $sql = "UPDATE posts SET category_id = '$category_id', name = '$name', slug = '$slug', description = '$description', image = '$new_img_name', meta_title = '$meta_title', meta_description = '$meta_description', meta_keyword = '$meta_keyword', status = '$status' WHERE id = '$id'";

    $query_run = mysqli_query($con, $sql);

    if($query_run){
        if($_FILES['image']['name'] != null){
            if(file_exists('../uploads/posts/'.$old_img))
                unlink('../uploads/posts/'.$old_img);    
        move_uploaded_file($tmp_name, $img_upload_path);
        }
        $_SESSION['message'] = "Post Updated Successfuly";
        header('location: post-add.php');
        exit(0);
    }else{
        $_SESSION['message'] = "Some thing Went Wrong!";
        header('location: post-add.php');
        exit(0);
    }
}

?>
