<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh sach san pham</title>
  <link rel="stylesheet" href="./public/css/stylelistproduct.css">
  <script src="https://kit.fontawesome.com/32b2689684.js"></script>
  <script src="/public/bootstrap/js/jquery.js"></script>
  <link rel="stylesheet" href="./public/bootstrap//css/bootstrap.min.css">
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
      <li><a href="http://localhost:8080/Do_An_2/addproduct">Thêm sản phẩm</a></li>
      <li><a href="http://localhost:8080/Do_An_2/listproduct">Danh sách sản phẩm</a></li>
      <li><a href="http://localhost:8080/Do_An_2/addnews">Thêm tin tức</a></li>
      <li><a href="http://localhost:8080/Do_An_2/listnews">Danh sách tin tức</a></li>
      <li><a href="http://localhost:8080/Do_An_2/home">Trang chủ</a></li>

    </ul>
  </div>
  <div class="ml-auto col-sm-9" id="table-data">
  <h4 class="text-center p-3">Danh sách tin tức</h4>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tiêu đề</th>
          <th>Xóa</th>
          <th>Chỉnh sửa</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($tintuc = mysqli_fetch_array($data["data1"])) {
          echo '<tr>';
          echo ' <td>' . $tintuc['id_tin_tuc'] . '</td>';
          echo ' <td>' . $tintuc['tieu_de'] . '</td>';
          echo '<td> <a class="text-danger" href="editnews/xoatintuc?id='. $tintuc['id_tin_tuc'] .' ">Xóa</a>  </td>';
          echo '<td> <a class="text-warning" href="editnews/laytintuc?id='. $tintuc['id_tin_tuc'] .' ">Sửa</a>  </td>';
          echo ' </tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
<html>