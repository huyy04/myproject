<main class="main">
    <div class="container" >
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li class="active">
                <h3>Giỏ hàng</h3>
            </li>
        </ul>

        <div class="row" >
            <div class="col-lg-8" style="margin:0 auto">
                <div class="cart-table-container">
                    <table class="table table-cart" style="text-align: center">
                        <tbody>
                        <?php
                            $i = 0;
                            $tong = 0;
                        echo '<tr>
                                  <td>Sản phẩm</td>
                                  <td>Tên sản phẩm</td>
                                  <td>Giá</td>
                                  <td>Số lượng</td>
                                  <td>Tổng tiền</td>
                                  <td>Thao tac</td>
                             </tr>';
                        foreach ($_SESSION['giohang'] as $cart) {
                            extract($cart);
                            $thanhtien = $price * $soluong;
                            $tong += $thanhtien;
                            $xoasp = '<a href="index.php?act=delcart&i=' . $i . '"><input type="button" value="Xoa"></a>';
                            echo '<tr class="product-row">
                                        <td><img src="img/' . $img . '" width="70px" height="70px" alt="product"></td>                          
                                        <td><a>' . $name . '</a></td>                          
                                        <td>' . $price . '</span></td>                         
                                        <td>' . $soluong . '</td>                          
                                        <td>' . $thanhtien . '</td>                         
                                        <td>' . $xoasp . '</td>                         
                                    </tr>';
                            $i++;
                        }
                        echo '<tr>
                                 <td>Tong</td>
                                 <td>' . $tong . '</td>
                             </tr>';
                        ?>
                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="5" class="clearfix">
                                <div class="float-left">
                                    <div class="cart-discount">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm"
                                                       placeholder="Coupon Code" required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-sm" type="submit">Apply
                                                        Coupon</button>
                                                </div>
                                            </div><!-- End .input-group -->
                                        </form>
                                    </div>
                                </div>

                                <div class="float-right">
                                    <a href="index.php?act=bill"><input type="submit" name="tieptuc" value="Tiep tuc" class="btn btn-shop btn-update-cart"></a>
                                </td>
                        </tr>
                        </tfoot>
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .col-lg-8 -->

        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main>