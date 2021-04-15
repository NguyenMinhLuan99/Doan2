<?php
class home extends Controller{
    function Load(){
    $tintuc = $this->model("adminModel");
    $data1 = $tintuc->gettintuc();
     $this->views("index",
        [
            "layout"=>  "home",
            "data1"=> $data1
        ]);
    }
  
}
?>