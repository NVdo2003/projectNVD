<?php
    function loginProcessCus(){
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];
        include_once 'connect/open.php';
        $sql = "SELECT *, COUNT(*) AS count_admin FROM admins WHERE admin_email = '$admin_email' AND admin_password = '$admin_password'";
        $admin = mysqli_query($connect, $sql);
        foreach ($admin as $admi){
            if ($admi['count_admin'] == 0){
                return 0;
            } else {
                $_SESSION['admin_email'] = $admi['admin_email'];
                $_SESSION['admin_id'] = $admi['admin_id'];
                return 1;
            }
        }
        include_once 'connect/close.php';
    }

    function logoutCus(){
        session_destroy();
    }

    switch ($action){
        case 'loginProcessCus':
            $admin = loginProcessCus();
            break;
        case 'logoutCus':
            logoutCus();
            break;
    }
?>