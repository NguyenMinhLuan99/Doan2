<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/styleproduct.css">
  <title>Tim san pham</title>
  <script src="https://kit.fontawesome.com/32b2689684.js"></script>
  <script src="/public/bootstrap/js/jquery.js"></script>
  <link rel="stylesheet" href="./public/bootstrap//css/bootstrap.min.css">
  <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <div id="main">
    <div class="timkiem">
      <form action="/Do_An_2/product/timsanpham" method="GET" enctype="multipart/form-data">

        <input type="text" name="tensanpham" placeholder="Tìm kiếm..">
        <input type="submit" value="Tìm">


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
        echo ' <img class=" img-product"src="./public/image/' . $products['anh_san_pham'] . '" />';
        echo ' <a class="d-block mr-center name-product"  name" href="http://localhost/Do_An_2/detailproduct">' . $products['ten_san_pham'] . '</a>';
        echo ' <p class="mr-4 price">' . $products['gia'] . '</p>';
        echo ' </div>';
      }
      ?>
    </div>
  </div>
</body>

</html>