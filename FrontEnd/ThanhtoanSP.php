<?php
session_start();
include "Baseheader.php";
?>
<!--CUSTOMER-->
<section class="customer">
    <div class="container">
        <div class="delivery-top-wrap">
            <div class="delivery-top">
                <div class="delivery-top-delivery delivery-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="delivery-top-address delivery-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="delivery-top-payment delivery-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="delivery-content row">
            <div class="left-delivery-content">
                <p style="font-weight: bold;">Vui lòng chọn địa chỉ giao hàng</p>
                <div class="left-delivery-login row">
                    <i class="fas fa-sign-in-alt"></i>
                    <a href="http://localhost/WEB/admin/user/login.php"><p><span style="font-weight: bold;">Đăng nhập</span> (Nếu bạn đã có tài khoản TrendyLife)</p></a>
                </div>
                <div class="left-delivery-nologin row">
                    <input checked name="Ncustomer" type="radio">
                    <p><span style="font-weight: bold;">Khách lẻ</span> (Nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="left-delivery-register row">
                    <input name="Ncustomer" type="radio">
                    <p><span style="font-weight: bold;">Đăng ký</span> (Tạo một tài khoản với thông tin bên dưới)</p>
                </div>
                <div class="left-delivery-input row">
                    <div class="left-delivery-input-item row">
                        <label for="">Họ tên <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="left-delivery-input-item row">
                        <label for="">Điện thoại <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="left-delivery-input-item row">
                        <label for="">Tỉnh/Thành phố <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="left-delivery-input-item row">
                        <label for="">Quận/Huyện <span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                </div>
                <div class="left-delivery-input-bottom">
                    <label for="">Địa chỉ <span style="color: red;">*</span></label>
                        <input type="text">
                </div>
                <div class="left-delivery-input-button row">
                    <a href="ThongtinSP.php"><span>&#171;</span><p>Quay lại trang sản phẩm</p></a>
                    <button><a href="KetthucSP.php"><P style="font-weight: bold;">THANH TOÁN VÀ GIAO HÀNG</P></a></button>
                </div>
            </div>
            <div class="right-delivery-content">
                <table>
                   <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giảm giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                   </tr>
                   <tr>
                        <td>Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay</td>
                        <td> 0%</td>
                        <td>1</td>
                        <td><p>686.000 <sup>đ</sup></p></td>
                   </tr>
                   <tr>
                        <td colspan="3" style="font-weight: bold;">Tổng</td>
                        <td style="font-weight: bold;"><p>686.000 <sup>đ</sup></p></td>
                   </tr>
                   <tr>
                    <td colspan="3" style="font-weight: bold;">Thuế VAT</td>
                    <td style="font-weight: bold;"><p>86.000 <sup>đ</sup></p></td>
               </tr>
                   <tr>
                    <td colspan="3" style="font-weight: bold;">Tổng tiền hàng</td>
                    <td style="font-weight: bold;"><p>754.000 <sup>đ</sup></p></td>
               </tr>
                </table>
            </div>
        </div>
    </div>
</section>
<br><hr width="150%" size="2" color="black"><br>
<?php
include "Basefooter.php";
?>