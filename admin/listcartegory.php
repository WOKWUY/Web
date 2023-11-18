<?php
include "header.php";
include "slider.php";
include "class/Danhmuc_class.php";
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory -> show_cartegory();
?>
<div class="admin-content-right">
            <div class="admin-content-right-listcartegory">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                    if($show_cartegory){$i = 0;
                        while($result = $show_cartegory -> fetch_assoc()){$i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['cartegory_name'] ?></td>
                        <td><a href="editcartegory.php?cartegory_id=<?php echo $result['cartegory_id']?>">Sửa</a>|<a href="deletecartegory.php?cartegory_id=<?php echo $result['cartegory_id']?>">Xóa</a></td>
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