<?php
include "header.php";
include "slider.php";

include "class/product_class.php";
?>
<?php
$product = new product;
$show_product = $product -> show_product();
?>
<div class="admin-content-right">
            <div class="admin-content-right-listproduct">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID Sản phẩm</th>
                        <th>ID Loại sản phẩm</th>
                        <th>ID Danh mục</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Giá sale sản phẩm</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                    if($show_product){$i = 0;
                        while($result = $show_product -> fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['brand_id'] ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['product_price'] ?></td>
                        <td><?php echo $result['product_sale_price'] ?></td>
                        <td><?php echo $result['product_detail'] ?></td>
                        <td><?php echo $result['product_img'] ?></td>
                        <td><a href="editproduct.php?product_id=<?php echo $result['product_id']?>">Sửa</a>|<a href="deleteproduct.php?product_id=<?php echo $result['product_id']?>">Xóa</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>