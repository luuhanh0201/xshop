<?php 
function insert_category($nameCategory){
    $sql = "insert into category(nameCategory) values('$nameCategory')";
    pdo_execute($sql);
}
function delete_category($idCategory){
    $sql = "delete from category where idCategory =" .$_GET['idCategory'];
    $listCategorys = pdo_query($sql);
}

function loadAllCategory(){
    $sql = "select * from category order by nameCategory";
    $listCategorys = pdo_query($sql);
    return $listCategorys;
}
function loadOneCategory($idCategory){
    $sql = "select * from category where idCategory=".$idCategory;
    $category = pdo_query_one($sql);
    return $category;
}

