<div class="main-content">
    <h2 class="title-page" style="color: red; text-align: center; margin: 40px ">Đơn hàng</h2>
    <form action="index.php?act=donhang" method="post">
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
        <tr>
<!--            <th>STT</th>-->
            <th>ID</th>
            <th>Mã đơn hàng</th>
            <th>Tổng tiền</th>
            <th>Thông tin khách hàng</th>
            <th>Trạng thái đơn hàng</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php
           foreach ($donhang as $dh){
               extract($dh);
               $link  ="index.php?act=donhangct&iddh=".$id;
               $suadh = "index.php?act=suadh&id=".$id;
               echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$madh.'</td>
                        <td>'.$tongdonhang.'</td>
                        <td>
                          <p>Họ tên : '.$hoten.'</p>
                          <p>Địa chỉ : '.$diachi.'</p>
                          <p>Số điện thoại : '.$tel.'</p>
                          <p>Email : '.$email.'</p>
                        </td>
                        <td>'.$ttdh.'</td>
                        <td>
                            <a href="'.$link.'" class="btn btn-warning">Chi tiết đơn hàng</a>
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                            <a href="'.$suadh.'" class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></i>Sửa</a>
                        </td>
                    </tr>';
           }
        ?>
        </tbody>
    </table>
    </form>
</div>

