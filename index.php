<?php
session_start();
//Lấy controller đang làm việc
$controller = '';
if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}
//    Kiểm tra đang làm việc với controller nào
switch ($controller){
    case 'admin':
        if(isset($_SESSION['user_email'])){
        include_once 'Controllers/adminController.php';
        } else {
            header('Location: index.php?controller=login&action=login');
        }
        break;
        
    case 'users':
        if(isset($_SESSION['user_email'])){
        include_once 'Controllers/usersController.php';
        } else {
            header('Location:index.php?controller=login&action=login');
        }
        break;
    case 'category':
        if(isset($_SESSION['user_email'])){
        include_once 'Controllers/categoryController.php';
        } else {
            header('Location:index.php?controller=login&action=login');
        }
        break;
    case 'brand':
        if(isset($_SESSION['user_email'])){
        include_once 'Controllers/brandController.php';
        } else {
            header('Location:index.php?controller=login&action=login');
        }
        break;
    case 'order':
        if(isset($_SESSION['user_email'])){
        include_once 'Controllers/orderController.php';
        } else {
            header('Location:index.php?controller=login&action=login');
        }
        break;
    case 'payment':
        if(isset($_SESSION['user_email'])){
        include_once 'Controllers/paymentController.php';
        } else {
            header('Location:index.php?controller=login&action=login');
        }
        break;
    case 'product':
        if(isset($_SESSION['user_email'])){
        include_once 'Controllers/productController.php';
        } else {
            header('Location:index.php?controller=login&action=login');
        }
        break;
    case 'customer':
        // if(isset($_SESSION['admin_email'])){
        include_once 'Controllers/customerController.php';
        // } else {
        //     header('Location:index.php?controller=loginCus&action=loginCus');
        // }
        break;
    case 'login':
        include_once 'Controllers/loginController.php';
        break;
    case 'loginCus':
        include_once 'Controllers/loginCusController.php';
        break;

}
?>
