<?php
session_start();
ob_start();
if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/global.php";
include "model/bill.php";
include "model/cart.php";
$sanpham = loadall_sanpham();
$danhmuc = load_danhmuc();
include "view/header.php";
if (isset($_GET['act'])){
    $act = $_GET['act'];
    switch ($act){
        case "ctsp":
            if (isset($_GET['id']) && $_GET['id'] > 0){
                $id = $_GET['id'];
                $sp = loadallone_sanpham($id);
                $sp_cungloai = load_sp_cungloai($id , $sp['iddm']);
                include "view/chitietsp.php";
            }
            break;

        case "dangky":
            if (isset($_POST['dangky']) && $_POST['dangky']){
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_taikhoan($user,$email,$pass);
                $thongbao = "Đăng ký thành công";
            }
            include "view/user/dangky.php";
            break;

        case "login":
            if (isset($_POST['login']) && $_POST['login']){
                  $user = $_POST['user'];
                  $pass = $_POST['pass'];
                  $checklogin = dangnhap($user,$pass);
            }
               include "view/user/login.php";
               break;
        case "dangxuat":
            dangxuat();
            header('location:index.php');
            break;
        case "viewcart":
            include "view/viewcart.php";
            break;

        case "addcart":
            if ($_POST['addcart']){
                //Lay thong tin form
                $idsp = $_POST['idsp'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
                $thanhtien = $soluong * $price;
                //Tao mang con
                $sanpham = array('idsp' => $idsp , 'name' => $name , 'img' => $img , 'price' => $price , 'soluong' => $soluong, 'thanhtien' => $thanhtien);
                array_push($_SESSION['giohang'],$sanpham);
                header('location:index.php?act=viewcart');
            }
            break;

        case "delcart":
            if (isset($_GET['i']) && $_GET['i'] > 0){
                array_splice($_SESSION['giohang'],$_GET['i'],1);
                header('location:index.php?act=viewcat');
            } else {
                $_SESSION['giohang'] = [];
            }
            include "view/viewcart.php";
            break;

        case "dathang":
            if (isset($_SESSION['user'])) {
                if (isset($_POST['dathang']) && ($_POST['dathang'])) {
                    //Lay du lieu tu form
                    $tongdonhang = tong();
                    $ten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $tel = $_POST['tel'];
                    $email = $_POST['email'];
                    $madh = "Shopcute" . rand(0, 9999);
                    //Tao don hang va tra ve 1 id don hang moi nhat
                    $iddh = taodonhang($tongdonhang, $ten, $diachi, $tel, $email, $madh);
                    //Tao gio hang
                    foreach ($_SESSION['giohang'] as $sanpham) {
                        extract($sanpham);
                        insert_cart($iddh, $idsp, $name, $img, $price, $soluong);
                    }
                    include "view/donhang.php";
                    unset($_SESSION['giohang']);
                }
            }else{
               include "view/false.php";
            }
            break;
        case "bill":
            include "view/bill.php";
            break;

        case "thankyou":
            include "view/false.php";
            break;
    }
}else {
    include "view/home.php";
}
include "view/footer.php";