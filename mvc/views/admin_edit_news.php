<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sua san pham</title>
  <link rel="stylesheet" href="../public/css/styleeditproduct.css">
  <script src="https://kit.fontawesome.com/32b2689684.js"></script>
  <script src="..//public/bootstrap/js/jquery.js"></script>
  <link rel="stylesheet" href="../public/bootstrap//css/bootstrap.min.css">
  <script src="../public/bootstrap/js/bootstrap.min.js"></script>

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
      <li><a href="http://localhost:8080/Do_An_2/addproduct">Thêm sản phẩm</a></li>
      <li><a href="http://localhost:8080/Do_An_2/listproduct">Danh sách sản phẩm</a></li>
      <li><a href="http://localhost:8080/Do_An_2/listnews">Danh sách tin tức</a></li>
      

    </ul>
  </div>
  
  <div class="container">
    <div class="row clearfix">
      <div class="col-md-12 column">
      <h4 class="text-center p-3">Chỉnh sửa tin tức</h4>
      <form action="/Do_An_2/editnews/suatintuc" method="POST" enctype="multipart/form-data">
      
  <?php
  while($tintuc = mysqli_fetch_array($data['data1'])){
    echo $tintuc['tieu_de'];
    echo '<input class="form-control" name = "id" value='.$tintuc['id_tin_tuc'].' />';
    echo '<input class="form-control" name = "tieude" value="'.$tintuc['tieu_de']. '" />';
    echo '<textarea class="form-control" name = "noidung" value="' .$tintuc['noi_dung']. '" >' .$tintuc['noi_dung']. '</textarea>';
    // echo '<input class="form-control" name = "noidung" value='.$tintuc['noi_dung']. ' />';
    echo '<button type="submit" class="btn-info form-control" value="update" name="submit">Update</button>';
  } 
  
  ?>
  <!-- <button type="submit" class=".btn-info form-control" value="update" name="submit">Update</button> -->


        </form>
      </div>
    </div>
   </div>
  </body>
<html>