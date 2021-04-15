<?php
class signup extends Controller{
    function Load(){
        $this->views("index",[
            "layout"=>"signup"
        ]);

    }
}
?>