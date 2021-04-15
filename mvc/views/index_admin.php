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
   <?php
    echo "<h5>Xin Chao " .$_SESSION['username']."</h5>";
   ?>
  </div>
  <!-- menu -->
  <div class="menu">
         <ul class="list">
          <li><a href="http://localhost/Do_An_2/adduser">Thêm user</a></li>
          <li><a href="http://localhost/Do_An_2/listuser">Danh sách user</a></li>
          <li><a href="http://localhost/Do_An_2/edituser">Sửa user</a></li>
          <li><a href="http://localhost/Do_An_2/addproduct">Thêm sản phẩm</a></li>
          <li><a href="http://localhost/Do_An_2/listproduct">Danh sách sản phẩm</a></li>
          <li><a href="http://localhost/Do_An_2/editproduct">Sửa sản phẩm</a></li>
          <li><a href="">Hóa đơn</a></li>
        </ul>
  </div>
</body>
<html>