<?php
class detailproduct extends Controller{
    function Load(){
        $this->views("index",[
            "layout"=>"detailproduct"
        ]);

    }
    function laySanPham(){
        $id = $_GET['id'];
        $model = $this->model('adminModel');
        $data1 = $model->laySanPham($id);
        $this->views('index',[
            'layout'=>'detailproduct',
            "data1" => $data1
        ]);
        
    }
}
?>