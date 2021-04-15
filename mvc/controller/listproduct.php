<?php
class listproduct extends Controller{
    function Load(){
        $sanpham = $this->model("adminModel");
        $data1 = $sanpham->getsanpham();
        $this->views("admin_list_product",[
            "data1"=> $data1
        ]);
    

    }
}
?>