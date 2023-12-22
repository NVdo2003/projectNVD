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
            include_once 'models/userModel.php';
//            Hiển thị dữ liệu lên views
            include_once 'views/admin/user.php';
            break;
        case 'create':
        //Hiển thị ra form để thêm
            include_once 'views/admin/add-user.php';
            break;
        case 'store':
        //Thêm dữ liệu lên DB
            include_once 'models/userModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=users');
            break;
        case 'edit':
        //Lấy dữ liệu của bản ghi đang được sửa
            include_once 'models/userModel.php';
        //Hiển thị ra form để sửa
            include_once 'views/admin/fix-user.php';
            break;
        case 'update':
        //Sửa dữ liệu trên DB
            include_once 'models/userModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=users');
            break;
        case 'destroy':
//            Xóa dữ liệu trên db
            include_once 'models/userModel.php';
//            Quay về trang danh sách
            header('Location:index.php?controller=users');
            break;
    }
?>