<?php
class admin extends Controller{
    function Load(){
        $teo = $this->model("adminModel");
        $data = $teo->getadmin();
            $this->views("index",[
            "layout"=>"admin_signin",
            "data" => $data
        ]);
    }
    function login(){
        session_start();
            $userName = $_POST['username'];
            $password = $_POST['password'];
            $$loginModel = $this->model('adminModel');
            $loginFunc = $$loginModel->loginModel($userName, $password);
            while($row = mysqli_fetch_array($loginFunc)){
                if($row['password'] == $password){
                    $_SESSION['username'] = $row['ho_ten'];
                    header("Location: /Do_An_2/addproduct");
                }
            
            }
    }
}
?>
