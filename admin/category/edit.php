<?php
    if(is_array($category)){
        extract($category);
    }
?>

<div style="margin: 0 auto ;" class="container">
    <form style="width: 500px;" action="index.php?act=updateCategory" method="post">
        <div class="container__title">
            <h1>Sửa danh mục</h1>
        </div>
        <div class="block-type">
            <label  class="form-label" for="">Id loại: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="idCategory" placeholder="ID điền tự động" disabled>
        </div>
        <div class="block-type">
            <label class="form-label" for="">Tên loại: </label> <br>
            <input style="width: 100%; padding: 4px 12px; border-radius: 5px;" class="form-control" type="text" name="nameCategory" placeholder="Nhập tên" value="<?php if(isset($nameCategory)  ){echo $nameCategory; }?>">
        </div>
        <input type="hidden" name="idCategory" value ="<?php if(isset($idCategory) ){echo $idCategory; }?>">
        <input type="submit" name="editCategory" value="Cập nhật"class="btn btn-primary"> 
        <button type="delete" name="deleteCategory" value="Xoá" class="btn btn-danger">Xoá</button>
        <button class="btn btn-info"><a class="" href="index.php?act=listCategory">xem danh sách</a></button>
       
        <?php
        if (isset($notification) && ($notification != "")) {echo $notification;}
        ?>
    </form>
</div>
