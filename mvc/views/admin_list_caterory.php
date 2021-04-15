
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach danh muc</title>
    <link rel="stylesheet" href="./public/css/stylelistproduct.css">
    <script src="https://kit.fontawesome.com/32b2689684.js"></script>
    <script src="/public/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.min.js"></script>

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
          <!-- <li><a href="http://localhost/Do_An_2/editcaterory">Sửa danh mục</a></li> -->
          <li><a href="http://localhost:8080/Do_An_2/addproduct">Thêm sản phẩm</a></li>
          <li><a href="http://localhost:8080/Do_An_2/listproduct">Danh sách sản phẩm</a></li>
          <li><a href="http://localhost:8080/Do_An_2/addnews">Thêm tin tức</a></li>
      <li><a href="http://localhost:8080/Do_An_2/listnews">Danh sách tin tức</a></li>
          <li><a href="http://localhost:8080/Do_An_2/home">Trang chủ</a></li>
       
        </ul>
  </div>
  <div class="ml-auto col-sm-9" id="table-data">
  <h4 class="text-center p-3">Danh sách danh mục</h4>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên danh mục</th>
          <th>Xóa</th>
          <th>Chỉnh sửa</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($caterory = mysqli_fetch_array($data["data1"])) {
          echo '<tr>';
          echo ' <td>' . $caterory['id_danh_muc'] . '</td>';
          echo ' <td>' . $caterory['ten_danh_muc'] . '</td>';
          echo '<td> <a class="text-danger" href="editcaterory/xoadanhmuc?id='. $caterory['id_danh_muc'] .' ">Xóa</a>  </td>';
          echo '<td> <a class="text-warning" href="editcaterory/laydanhmuc?id='. $caterory['id_danh_muc'] .' ">Sửa</a>  </td>';
          echo ' </tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
<html>