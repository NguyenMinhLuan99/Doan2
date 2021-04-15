<?php
class addnews extends Controller{
    function Load(){
        $them = $this->model("adminModel");
        $data = $them->gettintuc();
        $this->views("admin_add_news",[
        ]);
    

    }
    function themtintuc(){
        session_start();
            $ID = $_POST['idtintuc'];
            $Tieude = $_POST['tieude'];
            $Noidung = $_POST['noidung'];
            $Anh = $_FILES['anh']['name'];
            $model = $this->model("adminModel");
            $model->themtintuc($ID,$Tieude,$Noidung,$Anh);
                $_SESSION['msg'] = true;
                move_uploaded_file($_FILES['anh']['tmp_name'], "./public/image/$anh");
                header("Location: /Do_An_2/listnews");
             }
}
?>