<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    //    Kiểm tra hành động hiện tại
    switch ($action) {
        case 'login':
            if (isset($_SESSION['user_email'])){
                header('Location: index.php?controller=admin');
            } else {
                include_once 'views/admin/login.php';
            }
            break;
        case 'loginProcess':
            include_once 'models/loginModel.php';
            if ($user == 0){
                header('Location: index.php?controller=login&action=login');
            } elseif ($user == 1){
                header('Location: index.php?controller=admin');
            }
            break;
        case 'logout':
            include_once 'models/loginModel.php';
            header('Location: index.php?controller=login&action=login');
            break;
    }


?>