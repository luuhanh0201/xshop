<div class="body__category">
    <div style="text-align: center">
        <table class="table table-dark table-striped">
           <h2 style="background-color: #ccc;">Danh sách danh mục</h2>
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th></th>
            </tr>
            <?php
            foreach ($listCategorys as $category) {
                extract($category);
                $delete = "index.php?act=deleteCategory&idCategory=" . $idCategory;
                $edit = "index.php?act=editCategory&idCategory=" . $idCategory;

                echo '<tr>
            <td><input type="checkbox" name="" id="" ></td>
            <td>' . $idCategory . '</td>
            <td>' . $nameCategory . '</td>
            <td><a href="'.$edit.'"> <input class="btn btn-success" type="button" name="" id="" value="Sửa" ></a>
                <a href="'.$delete.'"> <input class="btn btn-danger" type="button" name="" id="" value="Xoá" ></a>
            </td>
            </tr>';
            }
            ?>

        </table>
        <div class="btn__control">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá tất cả mục đã chọn">
            <a href="index.php?act=addCategorys"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>