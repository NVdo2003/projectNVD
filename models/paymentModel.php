<?php
//function lấy dữ liệu từ db về
function indexpayment(){
    include_once 'connect/open.php';
    $sql = "SELECT * FROM payment";
    $payment = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $payment;
}
//    function thêm dữ liệu lên db
function storepayment(){
//        Lấy dữ liệu từ form về
    $payment_method = $_POST['payment_method'];
    include_once 'connect/open.php';
    $sql = "INSERT INTO payment (payment_method) VALUES ('$payment_method')";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function để lấy dữ liệu theo id
function editpayment(){
//        Lấy id
    $payment_id = $_GET['payment_id'];
    include_once 'connect/open.php';
    $sql = "SELECT * FROM payment WHERE payment_id = '$payment_id'";
    $payment = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $payment;
}
//    function sửa dữ liệu trên db theo id
function updatepayment(){
//        Lấy dữ liệu cần update lên db
    $payment_id = $_POST['payment_id'];
    $payment_method = $_POST['payment_method'];
    include_once 'connect/open.php';
    $sql = "UPDATE payment SET payment_method = '$payment_method' WHERE payment_id = '$payment_id'";
    $class = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function xóa dữ liệu trên db theo id
function destroypayment(){
//        Lấy id
    $payment_id = $_GET['payment_id'];
    include_once 'connect/open.php';
    $sql = "DELETE FROM payment WHERE payment_id = '$payment_id'";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}

//    Kiểm tra đang thực hiện hành động gì
switch ($action){
    case '':
        //Lấy dữ liệu từ db về
        $payment = indexpayment();
        break;
    case 'store':
        //Thêm dữ liệu lên DB
        storepayment();
        break;
    case 'edit':
        //Lấy bản ghi theo id
        $payment = editpayment();
        break;
    case 'update':
        //Sửa dữ liệu trên db theo id
        updatepayment();
        break;
    case 'destroy':
//            Xóa dữ liệu trên db theo id
        destroypayment();
        break;
}
?>