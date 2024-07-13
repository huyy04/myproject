<?php
function taodonhang($tongdonhang,$ten,$diachi,$tel,$email,$madh){
    $sql = "insert into donhang(tongdonhang,hoten,diachi,tel,email,madh) values ('$tongdonhang','$ten','$diachi','$tel','$email','$madh')";
    $listdonhang = pdo_execute_returnid($sql);
    return $listdonhang;
}
function donhang(){
    $sql = "select * from donhang where 1 order by id";
    $donhang = pdo_query($sql);
    return $donhang;
}
function delldh($id){
    $sql = "delete from cart where id=".$id;
    pdo_execute($sql);
}