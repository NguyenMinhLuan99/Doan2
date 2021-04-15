<?php
class product extends Controller{
    function Load(){
        $sanpham = $this->model("adminModel");
        $data1 = $sanpham->getsanpham();
        $danhmuc = $sanpham->getdanhmuc();
        $this->views("index",[
            "layout"=>"product",
            "data1"=> $data1,
            "danhmuc" => $danhmuc
        ]);

    }
    function timsanpham(){
            $Ten = $_GET['tensanpham'];
            $Ten = strtoupper($Ten);
            $model = $this->model("adminModel");
            $them = $model->timsanpham($Ten);
            $danhmuc = $model->getdanhmuc();
            $this->views("index",[
                "layout"=>"product",
                "data1"=> $them,
                "danhmuc" => $danhmuc
            ]);
    // function loadsanpham(){
    //     $sanpham = $this->model("adminModel");
    //     $data1 = $sanpham->getsanpham();
    //     $this->views("index",[
    //         "layout"=>"searchproduct",
    //         "data1"=> $data1
    //     ]);
     }
}
?>