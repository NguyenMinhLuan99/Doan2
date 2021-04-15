<?php
class listnews extends Controller{
    function Load(){
        $tintuc = $this->model("adminModel");
        $data1 = $tintuc->gettintuc();
        $this->views("admin_list_news",[
            "data1"=> $data1
        ]);
    

    }
}
?>