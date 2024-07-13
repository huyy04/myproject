<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo3-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 14:25:46 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/demo3.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="">
</head>

<body>
<div class="page-wrapper">
    <header class="header">
        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left">
                    <button class="mobile-menu-toggler" type="button">
                        <i class="fas fa-bars"></i>
                    </button>

                    <a href="index.php" class="logo">
                        <img src="assets/images/logo-black.png" alt="Porto Logo">
                    </a>
                </div><!-- End .header-left -->

                <div class="header-right">
                <?php if (isset($_SESSION['user'])){ ?>
                    <p>Hello <?php echo $_SESSION['user'] ?></p>
                    <br>
                    <button><a href="index.php?act=dangxuat">Đăng xuất</a></button>
                <?php }else{ ?>
                        <a href="index.php?act=login" style="font-size: 25px ; margin-right: 20px"  title="Login"><i class="icon-user-2"></i></a>
                    <?php } ?>

                    <div class="dropdown cart-dropdown">
                        <a href="index.php?act=viewcart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-cart-thick"></i>
                        </a>
                    </div><!-- End .dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->