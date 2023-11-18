<?php
include "Baseheader.php";
include "product1_class.php";
?>
<?php
$product = new product;
$show_product = $product -> show_product();
?>
<!--CARTELOGY-->
<section class="cartegory">
    <div class="container">
        <div class="top-cartegory row">
            <p>Trang chủ</p><span>&#10230;</span><p>Nữ</p><span>&#10230;</span><p>Áo</p><span>&#10230;</span><p>Áo sơ mi</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="left-cartegory">
                <ul>
                    <li class="left-cartegory-list"><a href="">NỮ</a>
                        <ul>
                            <li><a href="">Áo sơ mi</a></li>
                            <li><a href="">Áo thun</a></li>
                            <li><a href="">Áo khoác</a></li>
                            <li><a href="">Áo đầm</a></li>
                        </ul>
                    </li>
                    <li class="left-cartegory-list"><a href="">NAM</a></li>
                    <li class="left-cartegory-list"><a href="">TRẺ EM</a></li>
                    <li class="left-cartegory-list"><a href="">HÀNG SALE</a></li>
                </ul>
            </div>
            <div class="right-cartegory row">
                <div class="right-top-cartegory-item">
                    <p>ÁO SƠ MI</p>
                </div>
                <div class="right-top-cartegory-item">
                    <button><span>Bộ lọc</span><i class="fas fa-sort-down"></i></button>
                </div>
                <div class="right-top-cartegory-item">
                    <select name="" id="">
                        <option value="">Sắp xếp</option>
                        <option value="">Giá cao -> thấp</option>
                        <option value="">Giá thấp -> cao</option>
                    </select>
                </div>
                <div class="right-cartegory-content row">
                    <!--SP-->
                    <?php
                    if($show_product){$i = 0;
                        while($result = $show_product -> fetch_assoc()){$i++;
                    ?>
                    <div class="right-cartegory-content-item">
                        <a href="ThongtinSP.php?product_id=<?php echo $result['product_id']?>" ><img src="../admin/uploads/<?php echo $result['product_img'] ?>"></a>
                        <h1><?php echo $result['product_name'] ?></h1>
                        <p><?php echo $result['product_price'] ?><sup>đ</sup></p>
                    </div>
                    <?php
                        }
                    }
                    ?>
                    
                    <!-- <div class="right-cartegory-content-item">
                        <a href="ThongtinSP.php"><img src="../admin/uploads/<?php echo $result['product_img'] ?>"></a>
                        <h1>Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay</h1>
                        <p>686.000<sup>đ</sup></p>
                    </div>
                    <div class="right-cartegory-content-item">
                        <img src="../image/sp3.png">
                        <h1>Áo Sơ Mi Vải Dạ Kẻ Caro Dài Tay</h1>
                        <p>450.000<sup>đ</sup></p>
                    </div>
                    <div class="right-cartegory-content-item">
                        <img src="../image/sp4.png">
                        <h1>Áo Sơ Mi Cotton Dài Tay Kẻ Sọc</h1>
                        <p>550.000<sup>đ</sup></p>
                    </div>
                    <div class="right-cartegory-content-item">
                        <img src="../image/sp5.png">
                        <h1>Áo Kiểu Vải Rayon Lawn Kẻ Sọc Tay Pháp</h1>
                        <p>420.000<sup>đ</sup></p>
                    </div>
                    <div class="right-cartegory-content-item">
                        <img src="../image/sp6.png">
                        <h1>Áo Rayon In Họa Tiết Ngắn Tay</h1>
                        <p>513.000<sup>đ</sup></p>
                    </div>
                    <div class="right-cartegory-content-item">
                        <img src="../image/sp7.png">
                        <h1>Áo Sơ Mi Cotton Dài Tay</h1>
                        <p>486.000<sup>đ</sup></p>
                    </div>
                    <div class="right-cartegory-content-item">
                        <img src="../image/sp8. png">
                        <h1>Áo Sơ Mi Trắng Dài Tay</h1>
                        <p>533.000<sup>đ</sup></p>
                    </div>    -->
                </div>
                <div class="right-bottom-cartegory row">
                    <div class="right-bottom-cartegory-item">
                        <p>Hiển thị 2 <span>|</span> 4 sản phẩm</p>
                    </div> 
                    <div class="right-bottom-cartegory-item">
                        <p>&#171;<span></span> 1  2  3  4  5 <span>&#187;</span>   Trang cuối</p>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</section>
<br><hr width="100%" size="2" color="black"><br>
<!--JavaScript-->
<script>
    const menuSlidebar = document.querySelectorAll(".left-cartegory-list")
    menuSlidebar.forEach(function(menu,index){
        menu.addEventListener("click",function(){
            menu.classList.toggle("block")
        })
    })
</script> 
<?php
include "Basefooter.php";
?>