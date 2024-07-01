<?php 
include('authentication.php');

if(isset($_POST['category_add'])){

$name = $_POST['name'];
$slug = $_POST['slug'];
$description = $_POST['description'];

$meta_title = $_POST['meta_title'];
$meta_description = $_POST['meta_description'];
$meta_keyword = $_POST['meta_keyword'];

$navbar_status = $_POST['navbar_status'] == true? '1' : '0';
$status = $_POST['status'] == true? '1' : '0';


$query = "INSERT categories(name, slug,	description, meta_title, meta_description, meta_keyword, navbar_status, status)
 VALUES('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$navbar_status', '$status')";

$query_run = mysqli_query($con, $query);

if ($query_run) {
    $_SESSION['message'] = "Category Added Successfuly";
    header("location: category-add.php");
    exit(0);
  } else {
    $_SESSION['message'] = "Something went wrong";
    header("location: category-add.php");
    exit(0);

}
}
?>