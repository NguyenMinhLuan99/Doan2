<?php
class search extends Controller{
    function Load(){
        $sanpham = $this->model("adminModel");
        $data1 = $sanpham->getsanpham();
        $danhmuc = $sanpham->getdanhmuc();
        $this->views("index",[
            "layout"=>"searchproduct",
            "data1"=> $data1,
            "danhmuc" => $danhmuc
        ]);

    }
}
?>