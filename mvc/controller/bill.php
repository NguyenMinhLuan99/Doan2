<?php
class bill extends Controller{
    function Load(){
        $this->views("index",[
            "layout"=>"bill"
        ]);

    }
}
?>