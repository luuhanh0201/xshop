<?php
include "../global.php";
include "../modal/pdo.php";
include "../modal/product.php";
include '../layoutUser/header.php';
$newProduct = loadAllProductHome();
if ((isset($_GET['act']) && $_GET['act'] != "")) {
    $act = $_GET['act'];

    switch ($act) {
        case 'gioithieu':
            include "../layoutUser/view/gioithieu.php";
            break;
        case 'lienhe':
            include "../layoutUser/view/lienhe.php";
            break;
        case 'gopy':
            include "../layoutUser/view/gopy.php";
            break;
        case 'hoidap':
            include "../layoutUser/view/hoidap.php";
            break;
        default:
            include "../layoutUser/view/home.php";
            break;
    }
} else {
    include "../layoutUser/home.php";
}

include '../layoutUser/footer.php';
