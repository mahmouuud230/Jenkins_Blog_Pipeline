<?php
include('authentication.php');

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_btn'];

    $sql = "UPDATE users SET deleted = '1' WHERE db_id = '$id'";

    $query_run = mysqli_query($con, $sql);

    if($query_run)
    {
        $_SESSION['message'] = "Data Deleted Successfuly!";
        header('location: view_registered.php');
        exit(0);
    }

}

?>