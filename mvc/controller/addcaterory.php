<?php
class addcaterory extends Controller{
    function Load(){
        $themdanhmuc = $this->model("adminModel");
        $data = $themdanhmuc->getdanhmuc();
        $this->views("admin_add_caterory",[
        
        ]);
    

    }
    function themdanhmuc(){
        session_start();
            $ID = $_POST['iddanhmuc'];
            $Ten = $_POST['tendanhmuc'];
            $model = $this->model("adminModel");
            $them = $model->themdanhmuc($ID,$Ten);
                $_SESSION['msg'] = true;
                header("Location: /Do_An_2/listcaterory");
            }
}
?>