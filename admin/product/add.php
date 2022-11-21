<div style="margin: 0 auto ;" class="container">
    <form style="width: 500px;" action="index.php?act=addProducts" method="post" enctype="multipart/form-data">
        <div class="container__title">
            <h1>Thêm mới sản phẩm </h1>
        </div>
        <div class="block-type">
            <label class="form-label" for="">Danh mục: </label> <br>
            <select name="iddm">
                <?php
                
                foreach($listCategory as $category){
                    extract($category);
                    echo '<option value="'.$idCategory.'">'.$nameCategory.'</option>';
                }
                ?>
                
            </select>
        </div>
        <div class="block-type">
            <label class="form-label" for="">Id sản phẩm: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="idProduct" placeholder="ID điền tự động" disabled>
        </div>
        <div class="block-type">
            <label class="form-label" for="">Tên sản phẩm: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="nameProduct" placeholder="Tên sản phẩm">
        </div>

        <div class="block-type">
            <label class="form-label" for="">Đơn giá: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="priceProduct" placeholder="Giá sản phẩm">
        </div>
        <div class="block-type">
            <label class="form-label" for="">Hình ảnh: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="file" name="imgProduct">
        </div>

        <div class="block-type">
            <label class="form-label" for="">Mô tả: </label> <br>
            <textarea style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="descriptionProduct" ></textarea>
        </div>



        <div class="block-type">
            <input type="submit" name="addProducts" value="Thêm mới" class="btn btn-primary">
            <button type="delete" name="deleteProducts" value="Xoá" class="btn btn-danger">Xoá</button>
            <button class="btn btn-info"><a class="" href="index.php?act=listProducts">xem danh sách</a></button>
        </div
        >
        <?php
        if (isset($notification) && ($notification != "")) {
            echo $notification;
        }
        ?>
    </form>
</div>