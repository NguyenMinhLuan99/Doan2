<?php
      session_start();
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them tin tuc</title>
    <link rel="stylesheet" href="./public/css/styleaddproduct.css">
    <script src="https://kit.fontawesome.com/32b2689684.js"></script>
    <script src="/public/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="./public/bootstrap//css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.min.js"></script>

</head>
<body> 
  <!-- header -->
  <div class="header">
    <p>Admin</p>
   <!-- <?php
    // echo "<h5>Xin Chao " .$_SESSION['username']."</h5>";
   ?> -->
  </div>
  <!-- menu -->
  <div class="menu">
         <ul class="list">
          <li><a href="http://localhost:8080/Do_An_2/addcaterory">Thêm danh mục</a></li>
          <li><a href="http://localhost:8080/Do_An_2/listcaterory">Danh sách danh mục</a></li>
          <li><a href="http://localhost:8080/Do_An_2/addproduct">Thêm sản phẩm</a></li>
          <li><a href="http://localhost:8080/Do_An_2/listproduct">Danh sách sản phẩm</a></li>
          <li><a href="http://localhost:8080/Do_An_2/addnews">Thêm tin tức</a></li>
          <li><a href="http://localhost:8080/Do_An_2/listnews">Danh sách tin tức</a></li>
          <li><a href="http://localhost:8080/Do_An_2/addnews">Trang chủ</a></li>
          
        </ul>
  </div>
  <!-- <?php if($_SESSION['msg'] == true){
    echo "<p>Them thanh cong</p>";
  }?> -->
  <div class="form"id="info">
  <h4 class="text-center p-3">Thêm tin tức</h4>
          <form action="/Do_An_2/addnews/themtintuc" method="POST" enctype="multipart/form-data">
            <!-- <input type="text" name ="idtintuc" class="form-control" placeholder="ID..."> -->
            <input type="text" name ="tieude" class="form-control" placeholder="Tiêu đề...">
            <input type="text" name ="noidung" class="h-25 form-control"  placeholder="Nội dung...">
            <input type="file" name="anh" class="form-control" placeholder="Ảnh sản phẩm">
            <button name ="them" class="btn btn-success btn-lg col-sm-12 mt-5" id="btn-buy">Thêm</button>
          </form> 
      </div>
</body>
<html>