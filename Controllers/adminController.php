<?php
//Lấy hành động muốn thực hiện
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động đang thực hiện là gì
switch ($action) {
    case '':
//            Lấy dữ liệu từ DB về
        include_once 'models/adminModel.php';
//            Hiển thị dữ liệu lên views
        include_once 'views/admin/index.php';
        break;
}