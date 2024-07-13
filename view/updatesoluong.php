<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Lay du lieu ajax day len
    $productId = $_POST['id'];
    $newsoluong = $_POST['soluong'];
    //Kiem tra du lieu gio hang
    if (!empty($_SESSION['giohang'])){
        $index = array_search($productId , array_column($_SESSION['giohang'],'id'));
        //Neu san pham ton tai thi cap nhat lai so luong
        if ($index !== false){
            $_SESSION['giohang'][$index]['soluong'] = $newsoluong;
        }else{
            echo "San pham khong ton tai trong gio hang";
        }
    }else{
        echo "Gio hang chong";
    }
}