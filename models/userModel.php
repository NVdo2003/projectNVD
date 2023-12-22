<?php
//function lấy dữ liệu từ db về
function index(){
    include_once 'connect/open.php';
    $sql = "SELECT * FROM user";
    $user = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $user;
}
//    function thêm dữ liệu lên db
function store(){
//        Lấy dữ liệu từ form về
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_level = $_POST['user_level'];
    include_once 'connect/open.php';
    $sql = "INSERT INTO user(user_name, user_email, user_password, user_level ) VALUES ('$user_name', '$user_email', '$user_password', '$user_level')";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function để lấy dữ liệu theo id
function edit(){
//        Lấy id
    $user_id = $_GET['user_id'];
    include_once 'connect/open.php';
    $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
    $user = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $user;
}
//    function sửa dữ liệu trên db theo id
function update(){
//        Lấy dữ liệu cần update lên db
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_level = $_POST['user_level'];
    include_once 'connect/open.php';
    $sql = "UPDATE user SET user_name = '$user_name', user_email = '$user_email', user_password = '$user_password', user_level = '$user_level'  WHERE user_id = '$user_id'";
    $user = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function xóa dữ liệu trên db theo id
function destroy(){
//        Lấy id
    $user_id = $_GET['user_id'];
    include_once 'connect/open.php';
    $sql = "DELETE FROM user WHERE user_id = '$user_id'";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}

//    Kiểm tra đang thực hiện hành động gì
switch ($action){
    case '':
        //Lấy dữ liệu từ db về
        $user = index();
        break;
    case 'store':
        //Thêm dữ liệu lên DB
        store();
        break;
    case 'edit':
        //Lấy bản ghi theo id
        $user = edit();
        break;
    case 'update':
        //Sửa dữ liệu trên db theo id
        update();
        break;
    case 'destroy':
//            Xóa dữ liệu trên db theo id
        destroy();
        break;
}
?>
