<?php
 include('includes/header.php');
 include('includes/navbar.php');
 include('admin/config/dbcon.php');
$id = $_GET['ID'];
$sql = "SELECT * FROM posts WHERE id = '$id'";
$result = mysqli_query($con, $sql);
foreach($result as $data){
?>

<div class="mt-4 container pb50">
<div class="row">
<div class="col-md-9 mb40">
<article>
<img class="img-fluid mb30" src="uploads/posts/<?=$data['image']?>">
<div class="post-content">
<h3><?= $data['name']?></h3>
<ul class="post-meta list-inline">
<?php 
$sql = "SELECT * FROM admin LIMIT 1";
$result = mysqli_query($con, $sql);
foreach($result as $dataq){
?>
<li class="list-inline-item">
<i class="fa fa-user-circle-o"></i> <span class="text-secondary"><?= $dataq['name'];?></span>
</li>
<?php
}
$created = $data['created_at'];
$date = date_create($created);
?>
<li class="list-inline-item">
<i class="fa fa-calendar-o"></i> <span class="text-secondary"><?=$date->format('M j, Y');?></span>
</li>
</ul>
<p><?= $data['description']?></p>
<p class="lead"><?=$data['description']?></p>
<p><?=$data['description']?></p>
<?php }?>
<hr class="mb40">
<h4 class="mb40 text-uppercase font500">About Author</h4>
<div class="media mb40">
<?php 
$sql = "SELECT * FROM admin LIMIT 1";
$result = mysqli_query($con, $sql);
foreach($result as $data){
?>
<img style="border-radius: 50%;" class="d-flex" src="uploads/posts/<?=$data['image']?>" alt="Admin" height="80px" width="80px">
<div class="mx-1 media-body">
<h5 class="mt-0 font700"><?= $data['name']?></h5> <div class="text-secondary"><?= $data['description']?>.</div>
</div>
<?php }?>
</div>
<hr class="mb40">
<h4 class="mb40 text-uppercase font500">Comments</h4>
<?php 
$id = $_GET['ID'];
$sql = "SELECT * FROM comments WHERE post_id = '$id'";
$result = mysqli_query($con, $sql);
foreach($result as $data){
?> 
<div class="media mb40">
<i class="d-flex mr-3 fa fa-user-circle-o fa-3x"></i>
<div class="media-body">
   
<h5 class="mt-0 font400 clearfix">

<?=$data['name']?></h5><div class="text-secondary"><?= $data['comment']?>.</div>
</div>
</div>
<?php }?>

<hr class="mb40">
<h4 class="mb40 text-uppercase font500">Post a comment</h4>
<form method="POST" action="comment_action.php">
<div class="form-group">
<label>Name</label>
<?php $id = $_GET['ID']?>
<input type="hidden" name="hidden_id" value="<?= $id?>">
<input type="text" name="name" class="form-control" placeholder="John Doe">
</div>
<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="john@doe.com">
</div>
<div class="form-group">
<label>Comment</label>
<textarea class="form-control" name="comment" rows="5" placeholder="Comment"></textarea>
</div>
<div class="pt-2 clearfix float-right">
<button name="comment_btn" type="submit" class="btn btn-primary btn-lg">Comment</button>
</div>
</form>
</div>
</article>

</div>
<div class="col-md-3 mb40">
<!-- <div class="mb40">
<form>
<div class="input-group">
<input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
<button class="input-group-addon" id="basic-addon2"><i class="fa fa-search"></i></button>
</div>
</form>
</div> -->

<div class="mb40">
<h4 class="sidebar-title">Categories</h4>
<ul class="list-unstyled categories">
<?php 
$sql = "SELECT * FROM categories";
$result = mysqli_query($con, $sql);
foreach($result as $row){
?>
<li><a href="category_articles.php?ID=<?=$row['id']?>"><?=$row['name']?></a></li>
<?php }?>
</ul>
</div>

<div>
<h4 class="sidebar-title">Latest Posts</h4>

<ul class="list-unstyled">
<li class="media">
<?php 
$sql = "SELECT * FROM posts WHERE status = '0' ORDER BY created_at  DESC LIMIT 3 ";
$result = mysqli_query($con, $sql);
foreach($result as $row){
$created = $row['created_at'];
$date = date_create($created);

?>
<div class="py-2 d-flex flex-row">
<img class="pe-1 d-flex mr-3 img-fluid" width="64" height="64" src="uploads/posts/<?=$row['image']?>">
<div class="media-body">
<h5 class="mt-0 mb-1"><a href="view-post.php?ID=<?= $row['id']?>"><?=$row['name'] ?></a></h5><?=$date->format('M j, Y');?>
</div>
</div>
</li>   
<?php }?>
</ul>

</div>
</div>
</div>
</div>

<?php include('includes/footer.php');?>