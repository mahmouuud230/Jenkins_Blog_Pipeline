<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--<title>Document</title>-->
  
  <title><?php if(isset($page_title)){ echo "$page_title";}else{echo"Blog";} ?></title>
  <meta name="description" content="<?php if(isset($meta_description)){ echo "$meta_description";} ?>">
  <meta name="keywords" content="<?php if(isset($meta_keyword)){ echo "$meta_keyword";} ?>">
  <meta name="author" content="<?php if(isset($author)){ echo "$author";} ?>">
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
      
</head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;800&family=VT323&display=swap");

/* VIEW POST START */
/* body{
margin-top:20px;
} */
/*
Blog post entries
*/

.entry-card {
    -webkit-box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.05);
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.entry-content {
    background-color: #fff;
    padding: 36px 36px 36px 36px;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

.entry-content .entry-title a {
    color: #333;
}

.entry-content .entry-title a:hover {
    color: #4782d3;
}

.entry-content .entry-meta span {
    font-size: 12px;
}

.entry-title {
    font-size: .95rem;
    font-weight: 500;
    margin-bottom: 15px;
}

.entry-thumb {
    display: block;
    position: relative;
    overflow: hidden;
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.entry-thumb img {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
}

.entry-thumb .thumb-hover {
    position: absolute;
    width: 100px;
    height: 100px;
    background: rgba(71, 130, 211, 0.85);
    display: block;
    top: 50%;
    left: 50%;
    color: #fff;
    font-size: 40px;
    line-height: 100px;
    border-radius: 50%;
    margin-top: -50px;
    margin-left: -50px;
    text-align: center;
    transform: scale(0);
    -webkit-transform: scale(0);
    opacity: 0;
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
}

.entry-thumb:hover .thumb-hover {
    opacity: 1;
    transform: scale(1);
    -webkit-transform: scale(1);
}

.article-post {
    border-bottom: 1px solid #eee;
    padding-bottom: 70px;
}

.article-post .post-thumb {
    display: block;
    position: relative;
    overflow: hidden;
}

.article-post .post-thumb .post-overlay {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    transition: all .3s;
    -webkit-transition: all .3s;
    opacity: 0;
}

.article-post .post-thumb .post-overlay span {
    width: 100%;
    display: block;
    vertical-align: middle;
    text-align: center;
    transform: translateY(70%);
    -webkit-transform: translateY(70%);
    transition: all .3s;
    -webkit-transition: all .3s;
    height: 100%;
    color: #fff;
}

.article-post .post-thumb:hover .post-overlay {
    opacity: 1;
}

.article-post .post-thumb:hover .post-overlay span {
    transform: translateY(50%);
    -webkit-transform: translateY(50%);
}

.post-content .post-title {
    font-weight: 500;
}

.post-meta {
    padding-top: 15px;
    margin-bottom: 20px;
}

.post-meta li:not(:last-child) {
    margin-right: 10px;
}

.post-meta li a {
    color: #999;
    font-size: 13px;
}

.post-meta li a:hover {
    color: #4782d3;
}

.post-meta li i {
    margin-right: 5px;
}

.post-meta li:after {
    margin-top: -5px;
    content: "/";
    margin-left: 10px;
}

.post-meta li:last-child:after {
    display: none;
}

.post-masonry .masonry-title {
    font-weight: 500;
}

.share-buttons li {
    vertical-align: middle;
}

.share-buttons li a {
    margin-right: 0px;
}

.post-content .fa {
    color: #ddd;
}

.post-content a h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 0px;
}

.article-post .owl-carousel {
    margin-bottom: 20px !important;
}

.post-masonry h4 {
    text-transform: capitalize;
    font-size: 1rem;
    font-weight: 700;
}
.mb40 {
    margin-bottom: 40px !important;
}
.mb30 {
    margin-bottom: 30px !important;
}
.media-body h5 a {
    color: #555;
}
.categories li a:before {
    content: "\f0da";
    font-family: 'FontAwesome';
    margin-right: 5px;
}
/*
Template sidebar
*/

.sidebar-title {
    margin-bottom: 1rem;
    font-size: 1.1rem;
}

.categories li {
    vertical-align: middle;
}

.categories li > ul {
    padding-left: 15px;
}

.categories li > ul > li > a {
    font-weight: 300;
}

.categories li a {
    color: #999;
    position: relative;
    display: block;
    padding: 5px 10px;
    border-bottom: 1px solid #eee;
}

.categories li a:before {
    content: "\f0da";
    font-family: 'FontAwesome';
    margin-right: 5px;
}

.categories li a:hover {
    color: #444;
    background-color: #f5f5f5;
}

.categories > li.active > a {
    font-weight: 600;
    color: #444;
}

.media-body h5 {
    font-size: 15px;
    letter-spacing: 0px;
    line-height: 20px;
    font-weight: 400;
}

.media-body h5 a {
    color: #555;
}

.media-body h5 a:hover {
    color: #4782d3;
}
/* VIEW POST END */

.bodi{
  /* margin: 20px !important; */
  /* padding-left: 20px !important;
  padding-right: 20px !important; */
  font-family: "Poppins" !important;
  /* background: #d1dedd !important; */
}

ul,
li {
  padding: 0 !important;
  list-style-type: none !important;
}
h1,
h2,
h3 {
  color: #767f7e  !important;
}
p {
  color: #828b8a !important;
}

header {
  max-width: 1200px !important;
  border-bottom: 1px solid #767f7e !important;
  margin: 20px auto !important;
  text-align: start;
}

.gallery_header{

  max-width: 1300px !important;
  border-bottom: 1px solid #767f7e !important;
  margin: 20px 3% !important;


}

.grid-container {
  /* overflow-x: hidden !important; */
  margin: 0 auto !important;
  max-width: 1200px !important;
  display: grid !important;
  grid-template-columns: repeat(3, 1fr) !important;
  gap: 40px !important;
  /* background-color: red !important; */
}
.grid-gallery {
  overflow-x: hidden !important;
  margin: 0 3% !important;
  max-width: 1300px !important;
  display: grid !important;
  grid-template-columns: repeat(4, 1fr) !important;
  gap: 10px !important;
  /* background-color: red !important; */
}

main > article > img , main > .gallery-layout > img{
  width: 100% !important;
  height: 250px;
  /* border: 4px solid white !important; */
  border-radius: 8px !important;
  margin-bottom: 5px;
}

/* .featured {
  grid-column: span 3 !important;
  display: grid !important;
  gap: 49px !important;
  grid-template-columns: repeat(2, 1fr) !important;
  align-items: start !important;
} */

.grid-container > article {
  padding-bottom: 40px !important;
  border-bottom: 1px solid #767f7e !important;
    /* grid-column: span 3 !important;
    display: grid !important;
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 49px !important; */
  
}

article > div > a{
  text-decoration: none;
  
}
article > div > a:hover{
  opacity: 0.5;
}

.im:hover,  .im:hover{
  color: black !important;
}

.im:active{
  background-color: white;
}

@media screen and (max-width: 1100px) {
  .grid-gallery{
    grid-template-columns: repeat(3, 1fr) !important;
  }
  .gallery-layout{
    grid-column: span 1 !important;
  }
  
}
@media screen and (max-width: 980px) {
  article {
    grid-column: span 3 !important;
    display: grid !important;
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 49px !important;
  }
  .grid-gallery{
    grid-template-columns: repeat(2, 1fr) !important;
  }
  .gallery-layout{
    grid-column: span 1 !important;
  }
  /* .gallery-layout > img{
    height: 200px !important;
  } */
}


@media screen and (max-width: 760px) {
  article{
    display: block !important;
    /* grid-column: span 4 !important; */
  }

  .gallery-layout{
    grid-column: span 4 !important;
  }
  .gallery-layout > img{
    height: 300px !important; 
  }
}

</style>
<!-- Background color: #d1dedd -->
<body class="bodi" style="background: #F6F6F6">
