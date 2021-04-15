<?php
class login extends Controller{
    function Load(){
        $teo = $this->model("adminModel");
        $data = $teo->getadmin();
        $this->views("login",[
            "data" => $data
        ]);
    

    }
    function login(){
        session_start();
            $userName = $_POST['username'];
            $password = $_POST['password'];
            $$loginuserModel = $this->model('adminModel');
            $loginFunc = $$loginuserModel->loginuserModel($userName, $password);
            while($row = mysqli_fetch_array($loginFunc)){
                if($row['password'] == $password){
                    $_SESSION['username'] = $row['ho_ten'];
                    header("Location: /Do_An_2/home");
                }
                else{
                    $_SESSION["err"] = "Sai mat khau";
                   header("Location: /Do_An_2/login");
                }
            }
    }
}
?>