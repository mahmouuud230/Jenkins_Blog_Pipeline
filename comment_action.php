<?php
session_start();
include('admin/config/dbcon.php');

if (isset($_POST['comment_btn'])) {


  // To protect from sql injection we use mysqli_real_escape_string();
  $id = mysqli_real_escape_string($con, $_POST['hidden_id']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $comment = mysqli_real_escape_string($con, $_POST['comment']);
  
    
  
      $user_query = "INSERT INTO comments(name, email, comment, post_id) VALUES('$name', '$email','$comment', '$id')";
      $user_query_run = mysqli_query($con, $user_query);

      if ($user_query_run) {
        $_SESSION['message'] = "Thanks for your comment";
        header("location: view-post.php?ID=".$id);
        exit(0);
      } else {
        $_SESSION['message'] = "Something went wrong";
        header("location: register.php");
        exit(0);
      }
    
    }
  
?>
d