<?php 
include('authentication.php');


if(isset($_POST['delete_post']))

    $values = json_decode($_POST['delete_post'], true);
    $id = $values['id'];
    $image = $values['image'];
    
    $sql = "DELETE FROM posts WHERE id = '$id'";
    $sql = "UPDATE posts SET status = '1' WHERE id = '$id'";
    $result = mysqli_query($con, $sql);

    if($result){
        if(file_exists('../uploads/posts/'.$image))
            unlink('../uploads/posts/'.$image);    
        $_SESSION['message'] = "Post Deleted Successfully";
        header('location: post-view.php');
        exit(0);
     }else{
        $_SESSION['message'] = "Something went wrong";
        header('location: post-view.php');
        exit(0);
     }
?>