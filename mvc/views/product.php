<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost:8080/Do_An_2/public/css/styleproduct.css">
  <title>San pham</title>
  <script src="https://kit.fontawesome.com/32b2689684.js"></script>
  <script src="http://localhost:8080/Do_An_2/public/bootstrap/js/jquery.js"></script>
  <link rel="stylesheet" href="http://localhost:8080/Do_An_2/public/bootstrap/css/bootstrap.min.css">
  <script src="http://localhost:8080/Do_An_2/public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <div id="main">
  <!-- Tim kiem -->
    <div class="form-group col-sm-6 mx-auto mt-5 timkiem">
      <form class="d-flex" action="/Do_An_2/product/timsanpham" method="GET" enctype="multipart/form-data">
        <input class="form-control col-sm-10" type="text" name="tensanpham" placeholder="Tìm kiếm..">
        <input type="submit" hidden>
        <button class="btn btn-outline-dark col">Tìm</button>

      </form>
    </div>
    <!-- Danh muc san pham -->
    <div class="container">
      <a class="mt-4">Dòng sản phẩm:</a>
      <?php

      while ($caterory = mysqli_fetch_array($data["danhmuc"])) {
        echo  ' <div class="ml-4 caterory-item"> ';
        echo ' <h4 class="caterory">' . $caterory['ten_danh_muc'] . '</h4>';
        echo ' </div>';
      }
      ?>
    </div>
    <!-- San pham -->
    <div class="col-sm-10em row mx-auto products">

      <?php
      while ($products = mysqli_fetch_array($data["data1"])) {
        echo  ' <div class="col-sm-3  mt-2 product-item"> ';
        echo ' <img class=" img-product"src="http://localhost:8080/Do_An_2/public/image/' . $products['anh_san_pham'] . '" />';
        echo ' <a class="d-block mr-center name-product"  name">' . $products['ten_san_pham'] . '</a>';
        echo ' <p class="price">' . $products['gia'] . '</p>';
        echo ' <a class="chitiet " href="/Do_An_2/detailproduct/laySanPham?id='. $products['id_san_pham'] .' ">Xem chi tiết sản phẩm</a>';
        echo ' </div>';
        
      }
      ?>
    </div>
  </div>
</body>

</html>