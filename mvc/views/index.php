<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/style.css">
  <script src="https://kit.fontawesome.com/32b2689684.js"></script>
  <script src="./public/bootstrap/js/jquery.js"></script>
  <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
  <script src="./public/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
  <!-- Menu Top -->
  <div id="top">

    <a href="">
      <h4 id="logo-title">LUXURI-NEWS</h4>
    </a>
    <ul>
      <li><a href="http://localhost:8080/Do_An_2/home">Trang chủ</a></li>
      <li><a href="http://localhost:8080/Do_An_2/product">Sản phẩm</a></li>
      <li><a href="http://localhost:8080/Do_An_2/news">Tin tức</a></li>
      <li><a href="http://localhost:8080/Do_An_2/cart">Giỏ hàng</a></li>
      <!-- <li><a href="http://localhost/Do_An_2/bill">Đơn hàng</a></li> -->
      <li><a href="http://localhost:8080/Do_An_2/admin">Admin</a></li>
     
    </ul>
  </div>
  <!-- top -->
  
  <!-- <div id="form-search">
    <form action="action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"> Tìm</i></button>
    </form>
  </div> -->
  <!--body -->
  <?php
  if (!$data["layout"]) {
    require_once "home.php";
  } else {
    require_once $data["layout"] . '.php';
  }
  ?>

  <!-- Phan chan gioi thieu -->

  <div class="footer col-sm-12 row p-0 m-0">
    <div class="support d-block col-sm-6 mx-auto p-0 m-0">
      <ul>
        <li><img src="" alt="">Hổ trợ: 0999999999</li>
        <li><img src="" alt=""> &copy; Trụ sở Luxury Việt Nam </li>
        <li><img src="" alt="">Luxury News is published each business day. Thank you for reading us.</li>
      </ul>
    </div>
  </div>
</body>