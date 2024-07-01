<?php
include('authentication.php');

if(isset($_POST['add_user'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['db_status'] == true? '0' : '1 ';

    $query = "INSERT INTO users(db_fname, db_lname, db_email, db_password, role_as, db_status) VALUES ('$fname', '$lname', '$email', '$password', '$role_as', '$status')";

    $result = mysqli_query($con, $query);  

    if($result){
        $_SESSION['message'] = "Admin/User added Successfully";
        header('location: view_registered.php');
        exit(0);
    }

}

?>

