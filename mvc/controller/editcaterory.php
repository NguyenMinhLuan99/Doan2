<?php
class editcaterory extends Controller{
    function Load(){
        $danhmuc = $this->model("adminModel");
        $this->views("admin_list_caterory",[
        
        ]);
    

    }
    function xoadanhmuc(){
        $id = $_GET['id'];
        $model = $this->model('adminModel');
        $model->xoadanhmuc($id);
        header("Location: /Do_An_2/listcaterory");
    }
    function laydanhmuc(){
        $id = $_GET['id'];
        $model = $this->model('adminModel');
        $danhmuc = $model->laydanhmuc($id);
        $this->views('admin_edit_caterory',[
            "danhmuc" => $danhmuc
        ]);
    }
    function suadanhmuc(){    
        $ID = $_POST['iddanhmuc'];
        $Ten = $_POST['tendanhmuc'];
        $model = $this->model("adminModel");
        $model->suadanhmuc($ID,$Ten);
        header("Location: /Do_An_2/listcaterory");
}
}
?>