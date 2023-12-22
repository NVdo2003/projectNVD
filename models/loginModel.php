<?php
function loginProcess(){
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    include_once 'connect/open.php';
    $sql = "SELECT *, COUNT(*) AS count_user FROM user WHERE user_email = '$user_email' AND user_password = '$user_password'";
    $user = mysqli_query($connect, $sql);
    foreach ($user as $use){
        if ($use['count_user'] == 0){
            return 0;
        } else {
            $_SESSION['user_email'] = $use['user_email'];
            $_SESSION['user_id'] = $use['user_id'];
            return 1;
        }
    }
    include_once 'connect/close.php';
}

function logout(){
    session_destroy();
}

switch ($action){
    case 'loginProcess':
        $user = loginProcess();
        break;
    case 'logout':
        logout();
        break;
}
?>