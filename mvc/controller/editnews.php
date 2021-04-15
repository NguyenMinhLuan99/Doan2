<?php
class editnews extends Controller{
    function Load(){
        $tintuc = $this->model("adminModel");
        $this->views("admin_list_news");
    }
 
    function xoatintuc(){
        $id = $_GET['id'];
        $model = $this->model('adminModel');
        $model->xoatintuc($id);
        header("Location: /Do_An_2/listnews");
    }
    function laytintuc(){
        $id = $_GET['id'];
        $model = $this->model('adminModel');
        $data1 = $model->laytintuc($id);
        $this->views('admin_edit_news',[
            "data1" => $data1
        ]);
    }
    
    function suatintuc(){    
        $ID = $_POST['id'];
        $Tieude = $_POST['tieude'];
        $Noidung = $_POST['noidung'];
        $model = $this->model("adminModel");
        $model->suatintuc($ID,$Tieude,$Noidung);
        header("Location: /Do_An_2/listnews");
}

}
?>