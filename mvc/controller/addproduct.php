<?php

class addproduct extends Controller{
    function Load(){
        $them = $this->model("adminModel");
        $data = $them->getsanpham();
        $this->views("admin_add_product",[
        ]);
    

    }
    function themsanpham(){
        session_start();
            $ID = $_POST['id'];
            $Danhmuc = $_POST['danhmuc'];
            $Ten = $_POST['ten'];
            $Gia = $_POST['gia'];
            $Mota = $_POST['mota'];
            $anh = $_FILES['anh_sp']['name'];
            $model = $this->model("adminModel");
            $model->them($ID,$Ten,$Gia,$Mota, $anh,$Danhmuc);
                $_SESSION['msg'] = true;
                move_uploaded_file($_FILES['anh_sp']['tmp_name'], "./public/image/$anh");
                header("Location: /Do_An_2/listproduct");
             }
            
}
    

?>