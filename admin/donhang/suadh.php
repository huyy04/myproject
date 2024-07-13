<?php
if (is_array($donhang)) {
    extract($donhang);
}
?>
<div class="main-content">
    <form class="addPro" action="index.php?act=updatedh" method="POST" enctype="multipart/form-data">
        <h3 style="color: red;margin: 40px;text-align: center">Cap nhat don hang</h3>
        <div class="form-group">
            <label for="exampleInputFile">Mã đơn hàng</label>
            <div class="custom-file">
                <input type="text" class="form-control" name="madh" id="name" value="<?php echo $madh ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="name">Tổng tiền</label>
            <input type="text" class="form-control" name="tongtien" id="name" value="<?php echo $tongdonhang ?>">
        </div>
        <div class="form-group">
            <label for="name">Thông tin khách hàng</label>
            <input type="text" class="form-control" name="khachhang" id="name" value="<?php echo $hoten ?>" >
            <input type="text" class="form-control" name="khachhang" id="name" value="<?php echo $diachi ?>">
            <input type="text" class="form-control" name="khachhang" id="name" value="<?php echo $tel ?>">
            <input type="text" class="form-control" name="khachhang" id="name" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
            <label for="categories">Trạng thái đơn hàng</label>
            <select class="form-select" name="trangthaidh">
                <?php
                foreach ($danhmuc as $dm){
                    extract($dm);
                    echo '<option value="'.$iddm.'">'.$name.'</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" name="ok" class="btn btn-primary" value="Cập nhật trạng thái">
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>