<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/stylecart.css">
    <title>Gio hang</title>
    <script src="https://kit.fontawesome.com/32b2689684.js"></script>
    <script src="/public/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="./public/bootstrap//css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>


     <!--Form thong tin giao hang  -->
    <div class="form"id="input-group">
        <h3 class="title-group">Thông tin shop</h3>
          <form class="col-sm-8 mx-auto">
            <p class="congty">Công ty Luxury</p>
            <p class="congty">Địa chỉ 311 Nguyễn Văn Cừ An Hòa Ninh Kiều CT</p>
            <p class="congty">SĐT 0999 999 999</p>
            <p class="congty">Email: nmluan.ktpm0117@student.ctuet.edu.vn </p>

            
          </form> 
      </div>
      <!-- Form thong tin gio hang -->
      <div class="form" id="in-cart">
        <h3 class="title-group">Thông tin giỏ hàng</h3>
          <table>
              <tr>
                <th></th>
                <th>Tên SP</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <!-- <th>Thay đổi</th> -->
              </tr>
              <?php
              
   session_start();
   $total = 0;
   if(isset($_SESSION['cart'])){ 
     $cart = $_SESSION['cart'];
     foreach($cart as $item){
       $total += intval($item['gia']) * intval($item['soLuong']);
     echo '<tr>';
     echo  '  <td><img class="anh" src="http://localhost:8080/Do_An_2/public/image/' . $item['anh'] . '"></td>';
     echo ' <td>'.$item['ten'].'</td>';
     echo ' <td> '.$item['soLuong'].'</td>';
     echo  ' <td>'.$item['gia'].'</td>';
     echo  '  <td><a href="/Do_An_2/cart/inc_cart/?id='. $item['id'] .'"> <i class="fas fa-plus-circle"></i> </a>';
     echo     ' <a href="/Do_An_2/cart/dec_cart/?id='. $item['id'] .'"> <i class="fas fa-minus-circle"></i> </a>';
     echo   ' </td>';
     echo  ' </tr>';
      }
     } 
     echo' <tr>';
     echo' <td>Tổng:</td>';
     echo'<td></td>';
     echo'  <td></td>';
     echo ' <td>'.$total.'.000.000</td>';
     echo '</tr>';
?>  
  <tr>
  <td id="clear"><button class="btn btn-danger">Clear</button></td>
  </tr>

          </table>
          
      </div>
      <!-- <?php
      while($products = mysqli_fetch_array($data['data1'])){
    
    echo ' <p class="giasp mr-4 giasp">' . $products['id_san_pham'] . '</p>';
  
  } 
  
  ?> -->
</body>


<script>
$(function(){
  $('#clear').click(() =>{
  $.get('/Do_An_2/cart/clear_cart').then(() => window.location.href = '/Do_An_2/cart')
})
})
</script>
</html>