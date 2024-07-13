<main class="main">
    <div class="container" >
        <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
            <li class="active">
                <h3>Đặt hàng thành công ^^</h3>
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
                                 </tr>';
                                foreach ($_SESSION['giohang'] as $cart) {
                                    extract($cart);
                                    $thanhtien = $price * $soluong;
                                    $tong += $thanhtien;
                                    echo '<tr class="product-row">
                                                <td><img src="img/' . $img . '" width="70px" height="70px" alt="product"></td>                          
                                                <td><a>' . $name . '</a></td>                          
                                                <td>' . $price . '</span></td>                         
                                                <td>' . $soluong . '</td>                          
                                                <td>' . $thanhtien . '</td>                                              
                                            </tr>';
                                    $i++;
                                    }
                                    echo '<tr>
                                             <td>Tong</td>
                                             <td>' . $tong . '</td>
                                         </tr>';
                                    ?>
                        </tbody>
                    </table>
                </div><!-- End .cart-table-container -->
            </div><!-- End .col-lg-8 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
</main>