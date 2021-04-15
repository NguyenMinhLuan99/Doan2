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
      <div class="col-md-6 mx-auto column">
      <h4 class="text-center">Sửa sản phẩm</h4>
      <form action="/Do_An_2/editproduct/suasanpham" method="POST" enctype="multipart/form-data">
  <?php
  while($sp = mysqli_fetch_array($data['data1'])){
    echo '<input class="form-control" name = "id" value='.$sp['id_san_pham'].' />';
    echo '<input class="form-control" name = "ten" value="'.$sp['ten_san_pham']. '" />';
    echo '<input class="form-control" name = "gia" value='.$sp['gia']. ' />';
    echo '<textarea class="form-control" name = "mota" value="' .$sp['thong_tin']. '" >' .$sp['thong_tin']. '</textarea>';
    echo '<button type="submit" class="btn-info form-control" value="update" name="submit">Update</button>';
  } 
  
  ?>
  <!-- <button type="submit" class=".btn-info form-control" value="update" name="submit">Update</button> -->


        </form>
      </div>
    </div>
  </div>



        <!-- <form action="/Do_An_2/editproduct/suasanpham" method="POST" enctype="multipart/form-data"> -->


        <!-- <div class="col-xs-6 form-group">
            <label class="control-label col-xs-6" for="name">id:</label>
            <div class="col-xs-6">
              <input type="text" name="id" class="form-control" placeholder="ID..." value=" <?php echo $id; ?>">
            </div>
          </div>
          <div class="col-xs-6 form-group">
            <label class="control-label col-xs-6" for="email">Ten:</label>
            <div class="col-xs-6">
              <input type="text" name="ten" class="form-control" placeholder="Ten..." value="<?php echo $ten; ?>">
            </div>
          </div>
          <div class="col-xs-6 form-group">
            <label class="control-label col-xs-6" for="contact">Gia:</label>
            <div class="col-xs-6">
              <input type="text" name="gia" class="form-control" placeholder="Gia..." value="<?php echo $gia; ?>">
            </div>
          </div>
          <div class="col-xs-6 form-group">
            <label class="control-label col-xs-6" for="contact">Mota:</label>
            <div class="col-xs-6">
              <input type="text" name="mota" class="form-control" placeholder="Mota..." value="<?php echo $mota; ?>">
            </div>
          </div>
          <div class="col-xs-6 form-group">
            <label class="control-label col-xs-6" for="contact">Danh muc:</label>
            <select name="danhmuc">
              <option value="1">ROLEX</option>
              <option value="2">HUBLOT</option>
              <option value="3">IWC</option>
            </select>
          </div>

          <div class="col-xs-6 form-group">
            <div class="col-sm-offset-2 col-xs-6">


              <button type="submit" class=".btn-info form-control" value="update" name="submit">Update</button> -->
</body>
<html>