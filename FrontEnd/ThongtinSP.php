<?php
include "Baseheader.php";
include "product1_class.php";
?>
<?php
$product = new product;
$product_id = $_GET['product_id'];
$show_product = $product -> show_product();
$get_product = $product -> get_product($product_id);
$result = $get_product->fetch_assoc();

?>
<!--PRODUCT-->
<section class="product">
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="cart-top-address cart-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="cart-top-payment cart-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="top-product row">
            <p>Trang chủ</p><span>&#10230;</span><p>Nữ</p><span>&#10230;</span><p>Áo</p><span>&#10230;</span><p>Áo sơ mi</p><span>&#10230;</span><p>Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay</p>
        </div>
        <div class="product-content row">
            <div class="left-product-content row">
                <div class="left-product-content-big-img">
                    <img src="../admin/uploads/<?php echo $result['product_img'] ?>">
                </div>
            </div>
            <div class="right-product-content">
                <!--TenSP-->
                <div class="right-product-name">
                    <h1><?php echo $result['product_name'] ?></h1>
                </div>
                <!--GiaSP-->
                <div class="right-product-price">
                    <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                </div>
                <!--ThongtinSP-->
                <div class="right-product-info">
                    <p><?php echo $result['product_detail'] ?></p>
                </div>
                <!--Duongke-->
                <div class="right-product-hr">
                    <hr width="100%" size="2" color="black">
                </div>
                <!--MauSP-->
                <div class="right-product-color">
                    <p style="font-weight: bold;"><span>MÀU SẮC</span>: 68 BLUE</p><br>
                    <div class="right-product-color-img">
                        <img src="../image/color1.png">
                    </div>
                </div>
                <!--sizeSP-->
                <div class="right-product-size">
                    <p style="font-weight: bold;">KÍCH CỠ: NỮ S</p>
                    <div class="size">
                        <span>|</span>
                        <span>S</span>
                        <span>|</span>
                        <span>M</span>
                        <span>|</span>
                        <span>L</span>
                        <span>|</span>
                        <span>XL</span>
                        <span>|</span>
                        <span>XXL</span>
                        <span>|</span>
                    </div>
                </div>
                <!--SoluongSP-->
                <div class="quantity">
                    <p style="font-weight: bold;">SỐ LƯỢNG</p>
                    <input type="number" min="1" max="99" placeholder="1">
                    <p>còn ít hàng</p>
                </div>
                <!--MuaSP-->
                <div class="right-product-button">
                    <button><a href="ThanhtoanSP.php"><p>MUA HÀNG</p></a><i class="fas fa-shopping-cart" style="color: white;"></i></button>
                </div>
                <!--Duongke-->
                <div class="right-product-hr">
                    <hr width="100%" size="2" color="black">
                </div>
                <!--ShareSP-->
                <div class="right-product-share">
                    <p>CHIA SẺ</p>
                    <img src="../image/shareicon.png">
                </div>
            </div>
        </div>
    </div>
    
</section>
<br><hr width="150%" size="2" color="black"><br>
<?php
include "Basefooter.php";
?>