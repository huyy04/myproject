<main class="main main-test">
    <div class="container checkout-container">
         <div class="row">
            <div class="col-lg-7" style="margin:0 auto">
                <form action="index.php?act=dathang" method="post">
                    <input type="hidden" name="tongdonhang" value="<?php echo $tong ?>">
                <ul class="checkout-steps">
                    <li>
                        <h2 class="step-title">Thông tin đặt hàng</h2>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="hoten" class="form-control" />
                            </div>

                            <div class="form-group mb-1 pb-2">
                                <label>Địa chỉ
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" name="diachi"  />
                            </div>

                            <div class="form-group">
                                <label>Số điện thoại <abbr class="required" title="required">*</abbr></label>
                                <input type="tel" name="tel" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Email
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="email" name="email" class="form-control" required />
                            </div>
                            <input type="submit" name="dathang" class="btn btn-dark btn-place-order" value="Đặt hàng" ">

                    </li>
                </ul>
                </form>
            </div>

        </div>

    </div>
</main>