<?php
class cart extends Controller{
    function Load(){
        $this->views("index",[
            "layout"=>"cart"
        ]);

    }
    function addToCart(){
        session_start();
        $id = intval($_GET['id']);
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['soLuong'] +=1;
        }
        else{
            $model = $this->model('adminModel');
            $result = $model->laySanPham($id);
            $product = mysqli_fetch_array($result);
            $_SESSION['cart'][$id]= array(
                "id" => $id,
                "ten" => $product['ten_san_pham'],
                "anh" => $product['anh_san_pham'],
                "gia" => $product['gia'],
                "soLuong" => 1
            );
           
        }
        header("Location: /Do_An_2/cart");
    }
    function dec_cart(){
        session_start();
        $id = intval($_GET['id']);
        if(isset($_SESSION['cart'][$id])){
            if( $_SESSION['cart'][$id]['soLuong'] <= 0){
                $_SESSION['cart'][$id]['soLuong'] = 0;
            }
            else{
            $_SESSION['cart'][$id]['soLuong'] -=1;
            }
        }
        header("Location: /Do_An_2/cart");
    }
    function inc_cart(){
        session_start();
        $id = intval($_GET['id']);
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['soLuong'] +=1;
        }
        header("Location: /Do_An_2/cart");
    }
    function clear_cart(){
        session_start();
        unset($_SESSION['cart']);
    }
}
?>