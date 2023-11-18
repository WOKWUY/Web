<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$product = new product;
$product_id = $_GET['product_id'];
$get_product = $product -> get_product($product_id);
if($get_product){
    $resultB = $get_product -> fetch_assoc();
}


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_name = $_POST['product_name'];
    $cartegory_id = $_POST['cartegory_id'];
    $brand_id = $_POST['brand_id']; 
    $product_price = $_POST['product_price'];
    $product_sale_price = $_POST['product_sale_price'];
    $product_detail = $_POST['product_detail'];
    $product_img = $_FILES['product_img']['name'];
    $update_product = $product -> update_product($product_name,$cartegory_id, $brand_id,
    $product_price,$product_sale_price,$product_detail,$product_img,$product_id);
}
?>
<div class="admin-content-right">
<div class="admin-content-right-addproduct">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_name" required type="text" value="<?php echo $resultB['product_name'] ?>">
                    <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                    <select name="cartegory_id" id="">
                        <option value="">--Chọn--</option>    
                        <?php
                        $show_cartegory = $product->show_cartegory();
                        if($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){
                        ?>
                        
                        <option <?php if($resultB['cartegory_id']==$result['cartegory_id']){echo "SELECTED";} ?> value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }}
                        ?>
                    </select>
                    <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                    <select name="brand_id" id="">    
                        <option value="">--Chọn--</option>
                        <?php
                        $show_brand = $product->show_brand();
                        if($show_brand){while($result = $show_brand ->fetch_assoc()){
                        ?>
                        
                        <option <?php if($resultB['brand_id']==$result['brand_id']){echo "SELECTED";} ?> value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                        <?php
                        }}
                        ?>
                    </select>
                    <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_price" required type="text" value="<?php echo $resultB['product_price'] ?>">
                    <label for="">Giá khuyến mãi<span style="color: red;">*</span></label>
                    <input name="product_sale_price" required type="text" value="<?php echo $resultB['product_sale_price'] ?>">
                    <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
                    <textarea name="product_detail" required id="" cols="30" rows="10" ><?php echo $resultB['product_detail'] ?></textarea>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_img" required type="file">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_detail[]" required multiple type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>