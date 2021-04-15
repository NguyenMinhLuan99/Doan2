<?php
class readnews extends Controller{
    function Load(){
        $this->views("index",[
            "layout"=>"readnews"
        ]);

    }
    function laytintuc(){
        $id = $_GET['id'];
        $model = $this->model('adminModel');
        $data1 = $model->laytintuc($id);
        $this->views('index',[
            'layout'=>'readnews',
            "data1" => $data1
            
        ]);
        
    }
}
?>