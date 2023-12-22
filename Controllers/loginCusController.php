<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //    Kiểm tra hành động hiện tại
    switch ($action) {
        case 'loginCus':
            if (isset($_SESSION['admin_email'])){
                header('Location: index.php?controller=customer');
            } else {
                include_once 'views/customer/loginCus.php';
            }
            break;
        case 'loginProcessCus':
            include_once 'models/loginCusModel.php';
            if ($admin == 0){
                header('Location: index.php?controller=loginCus&action=loginCus');
            } elseif ($admin == 1) {
                header('Location:index.php?controller=customer&action=cart_view');
            }
            break;
        case 'logoutCus':
            include_once 'models/loginCusModel.php';
            header('Location: index.php?controller=loginCus&action=loginCus');
            break;
    }


?>