<?php 
include('authentication.php');

if(isset($_POST['category_update'])){

    $id = $_POST['idon'];
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $meta_title = $_POST['meta_title'];
    $description = $_POST['description'];
    $meta_description = $_POST['meta_description'];
    $meta_keyword = $_POST['meta_keyword'];
    $navbar_status = '0';
    $status = '0';
    if(isset($_POST['navbar_status'])){
    $navbar_status = '1';
    }
    
    if(isset($_POST['status'])){
    $status = 1;
    }
    
    
    
    // navbar_status = '$navbar_status == true? '1': '0'', status = '$status'
    $sql = "UPDATE categories SET name = '$name', slug = '$slug', description = '$description', meta_title = '$meta_title', meta_description = '$meta_description', meta_keyword = '$meta_keyword' , navbar_status = '$navbar_status' , status = '$status' WHERE id = '$id'";
    $query_run = mysqli_query($con, $sql);

    if($query_run){
        $_SESSION['message'] = "$name Category Updated";
        header('location: category-view.php?ID= '.$id);
        exit(0);
    }else{
        $_SESSION['message'] = "Some thing Went Wrong!";
        header('location: category-view.php?ID= '.$id);
        exit(0);
    }

}

?>