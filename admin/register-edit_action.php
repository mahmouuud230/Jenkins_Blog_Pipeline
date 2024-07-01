<?php
include('authentication.php');

if(isset($_POST['update_btn'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['db_status'] == true? '1' : '0';

    $query = "UPDATE users SET db_fname = '$fname', db_lname = '$lname', db_email = '$email', db_password = '$password', role_as = '$role_as', db_status = '$status' WHERE db_id = '$id'";

    $result = mysqli_query($con, $query);  

    
    $id == $_SESSION['auth_user']['user_id']? $_SESSION['auth_role'] = "$role_as" : ''; 
    if($result){
        if($_SESSION['auth_role'] == "1"){
        $_SESSION['message'] = "Updated Successfuly";
        header('location: view_registered.php');
        exit(0);
    }else{
        $_SESSION['message'] = "Role Updated";
        header('location: ../index.php');
        exit(0);
    }
    }

}

?>


