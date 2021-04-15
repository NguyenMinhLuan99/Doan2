<?php
      session_start();
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them san pham</title>
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
          <!-- <li><a href="http://localhost/Do_An_2/editcaterory">Sửa danh mục</a></li> -->
          <li><a href="http://localhost:8080/Do_An_2/addproduct">Thêm sản phẩm</a></li>
          <li><a href="http://localhost:8080/Do_An_2/listproduct">Danh sách sản phẩm</a></li>
          <li><a href="http://localhost:8080/Do_An_2/addnews">Thêm tin tức</a></li>
      <li><a href="http://localhost:8080/Do_An_2/listnews">Danh sách tin tức</a></li>
          <li><a href="http://localhost:8080/Do_An_2/home">Trang chủ</a></li>
        </ul>
  </div>
  <!-- <?php if($_SESSION['msg'] == true){
    echo "<p>Them thanh cong</p>";
  }?> -->
  <div class="form"id="info">
  <h4 class="text-center p-3">Thêm sản phẩm</h4>
          <form action="/Do_An_2/addproduct/themsanpham" method="POST" enctype="multipart/form-data">
            <!-- <input type="text" name ="id" class="form-control" placeholder="ID..."> -->
            <input type="text" name ="ten" class="form-control" placeholder="Tên sản phẩm...">
            <select name="danhmuc">
              <option value="1">ROLEX</option>
              <option value="2">HUBLOT</option>
              <option value="3">IWC</option>
            </select>
            <input type="text" name ="gia" class="form-control" placeholder="Giá...">
            <input type="file" name="anh_sp" class="form-control" placeholder="Ảnh sản phẩm">
            <input type="text" name ="mota" class="form-control" placeholder="Mô tả...">
            <button name ="them" class="btn btn-success btn-lg col-sm-12 mt-5" id="btn-buy">Thêm</button>
          </form> 
      </div>
</body>
<html>