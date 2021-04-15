<?php
class news extends Controller{
    function Load(){
    $tintuc = $this->model("adminModel");
    $data1 = $tintuc->gettintuc();
     $this->views("index",
        [
            "layout"=>  "news",
            "data1"=> $data1
        ]);
    }
  
}
?>