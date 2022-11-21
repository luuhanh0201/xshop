<?php
function insert_product($nameProduct, $priceProduct, $imgProduct, $descriptionProduct, $idCategory)
{
    $sql = "insert into product(nameProduct,priceProduct,imgProduct,descriptionProduct,idCategory) values('$nameProduct','$priceProduct','$imgProduct','$descriptionProduct','$idCategory')";
    pdo_execute($sql);
}
function delete_product($idProduct)
{
    $sql = "delete from product where idProduct =" . $_GET['idProduct'];
    pdo_execute($sql);
}
// function loadAllProduct1 (){
//     $sql = "select * from product order by idProduct desc";
//     $listProducts =pdo_query($sql);
//     return $listProducts;
// }
function loadAllProduct($kyw, $idCategory)
{
    $sql = "select * from product where 1";
    if ($kyw != "") {
        $sql .= " and nameProduct like '%" . $kyw . "%'";
    }
    if ($idCategory > 0) {
        $sql .= " and idCategory = '" . $idCategory . "%'";
    }
    $sql .= " order by idProduct desc";
    $listProducts = pdo_query($sql);
    return $listProducts;
}
function loadOneProduct($idProduct)
{
    $sql = "select * from product where idProduct=" . $idProduct;
    $product = pdo_query_one($sql);
    return $product;
}
function updateProduct($idProduct, $nameProduct, $priceProduct, $imgProduct, $descriptionProduct, $idCategory)
{
    if ($imgProduct != "")
        $sql = " update product set nameProduct= '" . $nameProduct . "',priceProduct= '" . $priceProduct . "',imgProduct= '" . $imgProduct . "'descriptionProduct= '" . $descriptionProduct . "',idCategory= '" . $idCategory . "' where idProduct =    " . $idProduct;
    else
        $sql = " update product set nameProduct= '" . $nameProduct . "',priceProduct= '" . $priceProduct . "',descriptionProduct= '" . $descriptionProduct . "',idCategory= '" . $idCategory . "' where idProduct =    " . $idProduct;


    pdo_execute($sql);
}
function loadAllProductHome()
{
    $sql = "select * from product where 1 order by idProduct desc limit 0,9";
    
    $listProducts = pdo_query($sql);
    return $listProducts;
}
