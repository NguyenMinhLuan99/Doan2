<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/stylenews.css">
  <script src="https://kit.fontawesome.com/32b2689684.js"></script>
  <script src="/public/bootstrap/js/jquery.js"></script>
  <link rel="stylesheet" href="../public/bootstrap//css/bootstrap.min.css">
  <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  
<?php
    while ($tintuc = mysqli_fetch_array($data["data1"])) {
      echo  ' <div class="news"> ';
      echo ' <h1 class="tieude">' . $tintuc['tieu_de'] . '</h1>';
      echo ' <img class="anh1"src="http://localhost:8080/Do_An_2/public/image/'.$tintuc['anh'].'" />';
      echo ' <p class="noidung1">' . $tintuc['noi_dung'] . '</p>';
      echo ' </div>';
    }
    ?>



</body>

</html>