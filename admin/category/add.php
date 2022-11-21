<div style="margin: 0 auto ;" class="container">
    <form style="width: 500px;" action="index.php?act=addCategorys" method="post">
        <div class="container__title">
            <h1>Thêm mới Danh mục </h1>
        </div>
        <div class="block-type">
            <label  class="form-label" for="">Id loại: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="idCategory" placeholder="ID điền tự động" disabled>
        </div>
        <div class="block-type">
            <label class="form-label" for="">Tên loại: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="nameCategory" placeholder="Nhập tên">
        </div>
        <button type="submit" name="addCategory" value="Thêm loại"class="btn btn-primary">Thêm</button>
        <button type="reset" name="resetCategory" value="Nhập lại" class="btn btn-secondary">Nhập lại</button>
        <button type="delete" name="deleteCategory" value="Xoá" class="btn btn-danger">Xoá</button>
        <button class="btn btn-info"><a class="" href="index.php?act=listCategory">xem danh sách</a></button>
       
        <?php
        if (isset($notification) && ($notification != "")) {echo $notification;}
        ?>
    </form>
</div>
