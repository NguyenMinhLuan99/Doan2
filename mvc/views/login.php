<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang nhap</title>
    <link rel="stylesheet" href="./public/css/stylesignin.css">
    <script src="https://kit.fontawesome.com/32b2689684.js"></script>
    <script src="/public/bootstrap/js/jquery.js"></script>
    <link rel="stylesheet" href="./public/bootstrap//css/bootstrap.min.css">
    <script src="public/bootstrap/js/bootstrap.min.js"></script>

</head>
<style>
    .footer, #top{
        display: none;
    }
    body{
        background-color: whitesmoke;
    }
    #login-form{
        border: 2px solid #CEECF5;
        background-color: #CEECF5;
        padding: 40px;
    }
    </style>
<body>
    <div class="container-fluid">
        <div class="form-group col-sm-4 mx-auto" id="login-form" style="margin-top: 200px">
            <p class="text-center text-uppercase">Đăng nhập</p>
            <form action="admin/login" method="POST">
                <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
                <input type="password" name="password"class="form-control" placeholder="Password" required>
                
                <button type="submit" name="login" class="btn btn-primary col-sm-12 mt-4">Đăng Nhập</button>
            </form>
        </div>
    </div>
