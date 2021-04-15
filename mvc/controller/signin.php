<?php
class signin extends Controller{
    function Load(){
        $this->views("index",[
            "layout"=>"signin"
        ]);

    }
}
?>