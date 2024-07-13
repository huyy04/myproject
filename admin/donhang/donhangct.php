<div class="main-content">
    <h3 class="title-page" style="color: red;text-align: center;margin: 40px">Đơn hàng chi tiết</h3>
    <form action="index.php?act=donhangct" method="post">
    <table id="example" class="table table-striped" style="width: 100%">
        <thead>
            <tr>
                <th>ID đơn hàng</th>
                <th>ID sản phẩm</th>
                <th>Tên</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php
                   extract($donhang);
                    $hinh="../img/".$img;
                    if (is_file($hinh)) {
                        $img="<img src='".$hinh."' height='80'>";
                    }else{
                        $hinh="no photo";
                    }
                   echo '<tr>
                        <td>'.$iddh.'</td>
                        <td>'.$idsp.'</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $soluong . '</td>
                        <td>
                            <a href="" class="btn btn-warning" ><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        </td>
                    </tr>';
        ?>
        </tbody>
    </table>
    </form>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable("#example");
</script>