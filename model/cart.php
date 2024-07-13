<?php
function tong() {
    $i = 0;
    $tong = 0;
    foreach ($_SESSION['giohang'] as $cart) {
        extract($cart);
        $thanhtien = $price * $soluong;
        $tong += $thanhtien;
    }
   return $tong;
}

function insert_cart($iddh,$idsp,$name,$img,$price,$soluong){
    $sql = "insert into cart (iddh,idsp,name,img,price,soluong) values ('$iddh','$idsp','$name','$img','$price','$soluong')";
    pdo_execute($sql);
}

//function giohang(){
//    $sql = "select sp.id , sp.name , sp.img , sp.price, soluong  from sanpham sp
//            inner join cart  on sp.id = cart.idsp";
//    $listgh = pdo_query($sql);
//    return $listgh;
//}
function giohang($id){
    $sql = "select * from donhang where id=".$id;
    $listgh = pdo_query_one($sql);
    return $listgh;
}
