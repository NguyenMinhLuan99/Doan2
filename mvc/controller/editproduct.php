<?php
class editproduct extends Controller{
    function Load(){
        $sanpham = $this->model("adminModel");
        $this->views("admin_list_product");
    }
 
    function xoaSanPham(){
        $id = $_GET['id'];
        $model = $this->model('adminModel');
        $model->xoaSanPham($id);
        header("Location: /Do_An_2/listproduct");
    }
    function laySanPham(){
        $id = $_GET['id'];
        $model = $this->model('adminModel');
        $data1 = $model->laySanPham($id);
        $this->views('admin_edit_product',[
            "data1" => $data1
        ]);
    }
    
    function suasanpham(){    
        $ID = $_POST['id'];
        $Ten = $_POST['ten'];
        $Gia = $_POST['gia'];
        $Mota = $_POST['mota'];
        $model = $this->model("adminModel");
        $model->suasanpham($ID,$Ten,$Gia,$Mota);
        header("Location: /Do_An_2/listproduct");
}

}
?>