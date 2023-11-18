<?php
include "Baseheader.php";
?>
<!--REPORT-->
<section class="report">
    <div class="container">
            <div class="delivery-content row">
                <div class="left-delivery-content">
                    <p style="font-weight: bold;">Vui lòng nhập đầy đủ thông tin:</p><br>
                    <div class="left-delivery-input row">
                        <div class="left-delivery-input-item row">
                            <label for="">Họ tên <span style="color: red;">*</span></label>
                            <input type="text" placeholder="your full name" id="fullname">
                        </div>
                        <div class="left-delivery-input-item row">
                            <label for="">Email <span style="color: red;">*</span></label>
                            <input type="text" placeholder="youremail@gmail.com" id="youremail">
                        </div>
                        <div class="left-delivery-input-item row">
                            <label for="">Tỉnh/Thành phố <span style="color: red;">*</span></label>
                            <input type="text" placeholder="your country" id="yourlocation">
                        </div>
                        <div class="left-delivery-input-item row">
                            <label for="">Giới tính <span style="color: red;">*</span></label>
                            <input type="text" placeholder="Nam/Nữ/Khác" id="gender">
                        </div>
                    </div>
                    <div class="left-delivery-input-bottom">
                        <label for="">Ý kiến của bạn <span style="color: red;">*</span></label>
                            <textarea name="" id="yourreport" cols="101" rows="10" placeholder="Type your enquries here..."></textarea>
                    </div>
                    <div class="left-delivery-input-button row">
                        <a href="Trangchu.php"><span>&#171;</span><p>Quay lại trang chủ</p></a>
                        <button onclick="Save();"><P style="font-weight: bold;">GỬI PHẢN HỒI</P></button>
                    </div>
                </div>
            </div> 
    </div>
</section>

<br><hr width="100%" size="2" color="black"><br>
<script src="validDate.js"></script>
<script src='https://cdn.jsdelivr.net/g/lodash@4(lodash.min.js+lodash.fp.min.js)'></script>
<?php
include "Basefooter.php";
?>