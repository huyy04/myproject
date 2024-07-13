<?php
function insert_taikhoan($user,$email,$pass){
    $sql = "insert into taikhoan (user,email,pass) values ('$user','$email','$pass')";
    pdo_execute($sql);
}

function dangnhap($user,$pass){
    $sql = "select * from taikhoan where user='$user' and pass='$pass' ";
    $taikhoan = pdo_query_one($sql);
    if ($taikhoan != false){
        $_SESSION['user'] = $user;
        echo '<script>window.location.href="index.php";</script>';
    }else{
        return "<p style='color:red'>Thông tin tài khoản không chính xác</p>";
    }
}

function insert_user($user,$pass){
    $sql = "select * from taikhoan where user='$user' and pass='$pass' ";
    $taikhoan = pdo_query_one($sql);
    if ($taikhoan != false){
        $_SESSION['user'] = $user;
        echo '<script>window.location.href="index.php";</script>';
    }else{
        return "<p style='color:red'>Thông tin tài khoản không chính xác</p>";
    }
}

function dangxuat(){
    if (isset($_SESSION['user'])){
        unset($_SESSION['user']);
    }
}
