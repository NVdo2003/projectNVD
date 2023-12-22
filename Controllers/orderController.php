<?php
//Lấy hành động muốn thực hiện
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}
//    Kiểm tra hành động đang thực hiện là gì
switch ($action) {
        case '':
                include_once 'models/orderModel.php';
                include_once 'views/admin/order.php';
                break;
        case 'admin_history':
                include_once 'models/orderModel.php';
                include_once 'views/admin/admin_history.php';
                break;
        case 'admin_detail':
                include_once 'models/orderModel.php';
                include_once 'views/admin/admin_detail.php';
                break;
        case 'ship':
                include_once 'models/orderModel.php';
                include_once 'views/admin/order.php';
                break;

}

?>