<div class="body__Product">
    <div style="text-align: center">
        <form action="index.php?act=listProducts" method="post">
            <input type="text" name="kyw">
            <select name="idCategory">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listCategory as $category) {
                    extract($category);
                    echo '<option value="' . $idCategory . '">' . $nameCategory . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="checkList" value="Tìm kiếm">
        </form>
        <table class="table table-dark table-striped">
            <h2 style="background-color: #ccc;">Danh sách sản phẩm</h2>
            <tr>
                <th></th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Đơn giá</th>
                <th>Mô tả</th>
                <th></th>
            </tr>
            <?php
            foreach ($listProducts as $product) {
                extract($product);
                $delete = "index.php?act=deleteProducts&idProduct=" . $idProduct;
                $edit = "index.php?act=editProducts&idProduct=" . $idProduct;
                $img = "../upload/" . $imgProduct;
                if (is_file($img)) {
                    $img = "<img src ='" . $img . "' height='80px'  >";
                } else {
                    $img = "Không có hình ảnh";
                }
                if (!function_exists('currency_format')) {
                    function currency_format($priceProduct, $suffix = ' đ')
                    {
                        if (!empty($priceProduct)) {
                            return number_format($priceProduct, 0, ',', '.') . "{$suffix}";
                        }
                    }
                }
                echo '<tr>
            <td><input type="checkbox" name="" id="" ></td>
            <td>' . $idProduct . '</td>
            <td>' . $nameProduct . '</td>
            <td>' . $img . '</td>
            <td>' . currency_format($priceProduct) . '</td>
            <td>' . $descriptionProduct . '</td>
            <td><a href="' . $edit . '"> <input class="btn btn-success" type="button" name="' . $edit . '" id="" value="Sửa" ></a>
                <a href="' . $delete . '"> <input class="btn btn-danger" type="button" name="' . $delete . '" id="" value="Xoá" ></a>
            </td>
            </tr>';
            }
            ?>

        </table>
        <div class="btn__control">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá tất cả mục đã chọn">
            <a href="index.php?act=addProducts"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>