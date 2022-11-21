<?php
include "../modal/pdo.php";
include "header.php";
include "../modal/category.php";
include "../modal/product.php";
//controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addCategorys':
            // kiểm tra người dùng có click vào thêm category hay không
            if (isset($_POST['addCategory'])) {
                $nameCategory = $_POST['nameCategory'];
                if (isset($nameCategory) && $nameCategory != "") {
                    insert_category($nameCategory);
                    $notification = " Đã thêm ";
                } else {
                    $notification = " <p style='color: red'>Vui lòng nhập dữ liệu</p>";
                }
            }
            include "category/add.php";
            break;

        case 'listCategory':

            $listCategorys = loadAllCategory();
            include "category/list.php";
            break;
        case 'deleteCategory':
            if (isset($_GET['idCategory'])) {
                delete_category($_GET['idCategory']);
            }

            $listCategorys = loadAllCategory();
            include "category/list.php";
            break;
        case 'editCategory':
            if (isset($_GET['idCategory'])) {
                $category = loadOneCategory($_GET['idCategory']);
            }
            include "category/edit.php";
            break;
        case 'updateCategory':
            if (isset($_POST['editCategory']) && $_POST['editCategory']) {
                $nameCategory = $_POST['nameCategory'];
                $idCategory = $_POST['idCategory'];
                $sql = "update category set nameCategory = '" . $nameCategory . "' where idCategory = " . $idCategory;
                pdo_execute($sql);
                if ($nameCategory == "") {
                    $notification = " <p style='color: red'>Vui lòng nhập dữ liệu</p>";
                } else {
                    $notification = "Cập nhật thành công";
                }
            }
            $listCategorys = loadAllCategory();
            include "category/list.php";
            break;
        case 'addProducts':
            if (isset($_POST['addProducts'])) {
                
                $nameProduct = $_POST['nameProduct'];
                $iddm = $_POST['iddm'];
                $priceProduct = $_POST['priceProduct'];
                $descriptionProduct = $_POST['descriptionProduct'];
                $filename = $_FILES['imgProduct']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["imgProduct"]["name"]);
                if (move_uploaded_file($_FILES["imgProduct"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["imgProduct"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                
                if ($nameProduct == "") {
                    $notification = " <p style='color: red'>Vui lòng nhập dữ liệu</p>";
                } else {
                    insert_product($nameProduct, $priceProduct, $filename, $descriptionProduct, $iddm);
                    $notification = "Thêm thành công";
                }
            }
            $listCategory = loadAllCategory();
            // var_dump($listCategory);
            include "product/add.php";
            break;

        case 'deleteProducts':
            if (isset($_GET['idProduct'])) {
                delete_product($_GET['idProduct']);
            }
            $listProducts = loadAllProduct("", 0);
            include "product/list.php";
            break;
        case 'listProducts':
            if (isset($_POST['checkList'])) {
                $kyw = $_POST['kyw'];
                $idCategory = $_POST['idCategory'];
            } else {
                $kyw = '';
                $idCategory = 0;
            }
            $listCategory = loadAllCategory();
            $listProducts = loadAllProduct($kyw, $idCategory);

            include "product/list.php";
            break;

        case 'editProducts':
            if (isset($_GET['idProduct'])) {
                $product = loadOneProduct($_GET['idProduct']);
            }
            $listCategory = loadAllCategory();
            include "product/edit.php";
            break;
        case 'updateProducts':
            if (isset($_POST['updateProduct']) && $_POST['updateProduct']) {
                $idProduct = $_POST['idProduct'];
                $idCategory = $_POST['idCategory'];
                $nameProduct = $_POST['nameProduct'];
                $priceProduct = $_POST['priceProduct'];
                $descriptionProduct = $_POST['descriptionProduct'];
                $imgProduct = $_FILES['imgProduct']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["imgProduct"]["name"]);
                if (move_uploaded_file($_FILES["imgProduct"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["imgProduct"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                updateProduct($idProduct, $nameProduct, $priceProduct, $imgProduct, $descriptionProduct, $idCategory);
                $notification = "Cập nhật thành công";
            }
            $listCategory = loadAllCategory();
            $listProducts = loadAllProduct("",0);
            include "product/list.php";
            break;

        case '':


            break;
        default:
            include 'body.php';
            break;
    }
} else {
    include 'body.php';
}
include "footer.php";
