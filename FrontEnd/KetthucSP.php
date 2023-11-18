<?php
session_start();
include "Baseheader.php";
if(!isset($_SESSION["user"])){
    header('location:../admin/user/login.php');
}
?>
<!--FINISH SHOPPING-->
<section class="payment">
    <div class="container">
        <div class="payment-top-wrap">
            <div class="payment-top">
                <div class="payment-top-delivery payment-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="payment-top-address payment-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="payment-top-payment payment-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="payment-img">
            <img src="../image/paymentsuccess.png">
        </div>
        <div class="payment-button row">
            <button><a href="danhmucSP.php"><P style="font-weight: bold;">TIẾP TỤC MUA HÀNG</P></a></button>
            <button><a href="PhanhoiSP.php"><P style="font-weight: bold;">PHẢN HỒI SẢN PHẨM</P></a></button>
        </div>
        <div></div>
    </div>
</section> 
<br><hr width="100%" size="2" color="black"><br>  
<?php
include "Basefooter.php";
?>