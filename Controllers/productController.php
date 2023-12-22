<?php
//Lấy hành động muốn thực hiện
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động đang thực hiện là gì
switch ($action){
    case '':
//            Lấy dữ liệu từ DB về
        include_once 'models/productModel.php';
//            Hiển thị dữ liệu lên views
        include_once 'views/admin/product.php';
        break;
    case 'create':
        //Hiển thị ra form để thêm
       include_once 'models/productModel.php';
        include_once 'views/admin/add-product.php';
        break;
    case 'store':
        //Thêm dữ liệu lên DB
        include_once 'models/productModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=product');
        break;
    case 'edit':
        //Lấy dữ liệu của bản ghi đang được sửa
        include_once 'models/productModel.php';
        //Hiển thị ra form để sửa
        include_once 'views/admin/fix-product.php';
        break;
    case 'update':
        //Sửa dữ liệu trên DB
        include_once 'models/productModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=product');
        break;
    case 'destroy':
//            Xóa dữ liệu trên db
        include_once 'models/productModel.php';
//            Quay về trang danh sách
        header('Location:index.php?controller=product');
        break;

    
}
?>