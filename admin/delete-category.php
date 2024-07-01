<?php 
include('authentication.php');
if(isset($_POST['delete_category']))

$id = $_POST['delete_category'];

$sql = "UPDATE categories SET status = '1' WHERE id = '$id'";

$query_run = mysqli_query($con, $sql);

if($query_run){
    $_SESSION['message'] = "Category Deleted Successfuly";
    header('location: category-view.php');
    exit(0);
}else{
    $_SESSION['message'] = "Category Deleted Successfuly";
    header('location: category-view.php');
    exit(0);
}
?>