<?php
if (is_array($product)) {
    extract($product);
}
$idCategoryProduct = $idCategory;
$img = "../upload/" . $imgProduct;
if (is_file($img)) {
    $img = "<img src ='" . $img . "' height='200px'  >";
} else {
    $img = "Không có hình ảnh";
}
?>

<div style="margin: 0 auto ;" class="container">
    <form style="width: 500px;" action="index.php?act=updateProducts" method="post" enctype="multipart/form-data">
        <div class="container__title">
            <h1>Sửa sản phẩm </h1>
        </div>
        <div class="block-type">
            <label class="form-label" for="">Danh mục: </label> <br>
            <select name="iddm">
                <?php
                foreach ($listCategory as $category) {
                    extract($category);
                    if($idCategory == $idCategoryProduct){
                    echo '<option value="' . $idCategory . '" selected>' . $nameCategory . '</option>';
                    }else{
                    echo '<option value="' . $idCategory . '" >' . $nameCategory . '</option>';

                    }
                }
                ?>

            </select>
        </div>
        <div class="block-type">
            <label class="form-label" for="">Id sản phẩm: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="idProduct" value="<?= $idProduct ?>" disabled>
        </div>
        <div class="block-type">
            <label class="form-label" for="">Tên sản phẩm: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="nameProduct" value="<?= $nameProduct ?>">
        </div>

        <div class="block-type">
            <label class="form-label" for="">Đơn giá: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="priceProduct" value="<?= $priceProduct ?>">
        </div>
        <div class="block-type">
            <label class="form-label" for="">Hình ảnh: </label> <br>
            <div class="img" style="text-align: center;">
            <?= $img ?>
            </div>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="file" value="">
        </div>

        <div class="block-type">
            <label class="form-label" for="">Mô tả: </label> <br>
            <textarea style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" value=""><?= $descriptionProduct ?></textarea>
        </div>



        <div class="block-type">
            <input type="hidden" name="idProduct" value="><?=$idProduct ?>">
            <input type="submit" name="updateProduct" value="Cập nhật" class="btn btn-primary">
            <input type="delete" name="deleteProducts" value="Xoá" class="btn btn-danger">
            <button class="btn btn-info"><a class="" href="index.php?act=listProducts">xem danh sách</a></button>
        </div>
        <?php
        if (isset($notification) && ($notification != "")) {
            echo $notification;
        }
        ?>
    </form>
</div>