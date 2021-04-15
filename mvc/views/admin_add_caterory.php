<?php
      session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them danh muc</title>
    <link rel="stylesheet" href="./public/css/styleadduser.css">
    <script src="https://kit.fontawesome.com/32b2689684.js"></script>
    <script src="/public/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="./public/bootstrap//css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.min.js"></script>

</head>
<body> 
  <!-- header -->
  <div class="header">
   <p>Admin</p>
  </div>
  <!-- menu -->
  <div class="menu">
         <ul class="list">
          <li><a href="http://localhost:8080/Do_An_2/addcaterory">Thêm danh mục</a></li>
          <li><a href="http://localhost:8080/Do_An_2/listcaterory">Danh sách danh mục</a></li>
          <!-- <li><a href="http://localhost/Do_An_2/editcaterory">Sửa danh mục</a></li> -->
          <li><a href="http://localhost:8080/Do_An_2/addproduct">Thêm sản phẩm</a></li>
          <li><a href="http://localhost:8080/Do_An_2/listproduct">Danh sách sản phẩm</a></li>
          <li><a href="http://localhost:8080/Do_An_2/addnews">Thêm tin tức</a></li>
      <li><a href="http://localhost:8080/Do_An_2/listnews">Danh sách tin tức</a></li>
          <li><a href="http://localhost:8080/Do_An_2/home">Trang chủ</a></li>
          
        </ul>
  </div>
  <div class="form"id="info">
  <h4 class="text-center p-3">Thêm danh mục</h4>
          <form action="/Do_An_2/addcaterory/themdanhmuc" method="POST" enctype="multipart/form-data">
            <!-- <input type="text" name ="iddanhmuc" class="form-control" placeholder="ID" > -->
            <input type="text" name ="tendanhmuc" class="form-control" placeholder="Tên danh mục">
            <button type="submit" class="btn btn-success btn-lg col-sm-12 mt-5" id="btn-buy">Thêm</button>
          </form> 
      </div>
</body>
<html>