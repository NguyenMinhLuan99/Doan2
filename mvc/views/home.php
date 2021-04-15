<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./public/css/stylehome.css">
  <script src="https://kit.fontawesome.com/32b2689684.js"></script>
  <script src="/public/bootstrap/js/jquery.js"></script>
  <link rel="stylesheet" href="./public/bootstrap//css/bootstrap.min.css">
  <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <!-- <div class="banner1"> 
   <img class ="imgbanner" src="./public/image/banner1.png">
  </div> -->
  <div class="imgbanner">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./public/image/banner4.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./public/image/banner2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./public/image/banner3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  <!-- tieu de tin tuc moi -->
  <div id="sp-noi-bac">
    <p class="thong-tin" > Tin tức mới nhất </p>
  </div>
 
 <!-- Tin tuc -->
  <div class="noidung">

    <?php
    while ($tintuc = mysqli_fetch_array($data["data1"])) {
      echo  ' <div class="news"> ';
      echo ' <h1 class="noidung1" >' . $tintuc['tieu_de'] . '</h1>';
      echo ' <img class="anh1"src="./public/image/'.$tintuc['anh'].'" />';
      echo ' <a class="chitiettintuc" href="readnews/laytintuc?id='. $tintuc['id_tin_tuc'] .' ">Tìm hiểu thêm</a>';
      echo ' </div>';
    }
    ?>


 

</body>

</html>