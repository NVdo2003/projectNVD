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
        include_once 'models/customerModel.php';
//            Hiển thị dữ liệu lên views
        include_once 'views/customer/home.php';
        break;
    case 'home':
        include_once 'models/customerModel.php';
        //Hiển thị ra form để thêm
        include_once 'views/customer/home.php';
        break;
    case 'product':
        include_once 'models/customerModel.php';
        //Hiển thị ra form để thêm
        include_once 'views/customer/product.php';

        break;
    case 'cart_view':
        include_once 'models/customerModel.php';
        //Hiển thị ra form để thêm
        include_once 'views/customer/cart.php';
        break;
    case 'cart':
        include_once 'models/customerModel.php';
        //Hiển thị ra form để thêm
        include_once 'views/customer/cart.php';
        break;
    case 'detail':
        include_once 'models/customerModel.php';
        //Hiển thị ra form để thêm
        include_once 'views/customer/detail.php';

        break;
    case 'order_history':
        include_once 'models/customerModel.php';
        //Hiển thị ra form để thêm
        include_once 'views/customer/order_history.php';
        break;
    case 'order_detail':
        include_once 'models/customerModel.php';
        //Hiển thị ra form để thêm
        include_once 'views/customer/order_detail.php';
        break;
    case 'add_to_cart':
        include_once 'models/customerModel.php';
        header('Location:index.php?controller=customer&action=cart_view');
        break;
    case 'delete_one_cart':
        include_once 'models/customerModel.php';
        header('Location:index.php?controller=customer&action=cart_view');
        break;
    case 'update_cart':
        include_once 'models/customerModel.php';
        header('Location:index.php?controller=customer&action=cart_view');
        break;
    case 'delete_cart':
        include_once 'models/customerModel.php';
        header('Location:index.php?controller=customer&action=cart_view');
        break;
    case 'add_order':
        include_once 'models/customerModel.php';
        header('Location:index.php?controller=customer&action=cart_view');
        break;
}