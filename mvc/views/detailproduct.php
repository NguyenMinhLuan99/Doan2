<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiet san pham</title>
    <link rel="stylesheet" href="http://localhost:8080/Do_An_2/public/css/styledetail.css">
    <script src="https://kit.fontawesome.com/32b2689684.js"></script>
    <script src="/public/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="../public/bootstrap//css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.min.js"></script>

</head>
<body> 
  <style>
    .footer{
        display: none;
        
    }
  </style>

        <?php
  while($products = mysqli_fetch_array($data['data1'])){
    echo ' <img class="anhsp"src="http://localhost:8080/Do_An_2/public/image/' . $products['anh_san_pham'] . '" />';
    echo ' <p class=" tensp" >' . $products['ten_san_pham'] . '</p>';
    echo ' <p class="giasp ">' . $products['gia'] . '</p>';
    echo ' <p class=" thongtinsp mr-4 thongtinsp">' . $products['thong_tin'] . '</p>';
    echo ' <a type="button" class="btn btn-warning add" href="/Do_An_2/cart/addToCart/?id='. $products['id_san_pham'] .' ">Thêm vào giỏ</a>';
  } 
  
  ?>

    

</body>
</html>