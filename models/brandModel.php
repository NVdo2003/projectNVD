<?php
//function lấy dữ liệu từ db về
function indexbrand(){
    include_once 'connect/open.php';
    $sql = "SELECT * FROM brand";
    $brand = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $brand;
}
//    function thêm dữ liệu lên db
function storebrand(){
//        Lấy dữ liệu từ form về
    $brand_name = $_POST['brand_name'];
    include_once 'connect/open.php';
    $sql = "INSERT INTO brand (brand_name) VALUES ('$brand_name')";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function để lấy dữ liệu theo id
function editbrand(){
//        Lấy id
    $brand_id = $_GET['brand_id'];
    include_once 'connect/open.php';
    $sql = "SELECT * FROM brand WHERE brand_id = '$brand_id'";
    $brand = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $brand;
}
//    function sửa dữ liệu trên db theo id
function updatebrand(){
//        Lấy dữ liệu cần update lên db
    $brand_id = $_POST['brand_id'];
    $brand_name = $_POST['brand_name'];
    include_once 'connect/open.php';
    $sql = "UPDATE brand SET brand_name = '$brand_name' WHERE brand_id = '$brand_id'";
    $class = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function xóa dữ liệu trên db theo id
function destroybrand(){
//        Lấy id
    $brand_id = $_GET['brand_id'];
    include_once 'connect/open.php';
    $sql = "DELETE FROM brand WHERE brand_id = '$brand_id'";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}

//    Kiểm tra đang thực hiện hành động gì
switch ($action){
    case '':
        //Lấy dữ liệu từ db về
        $brand = indexbrand();
        break;
    case 'store':
        //Thêm dữ liệu lên DB
        storebrand();
        break;
    case 'edit':
        //Lấy bản ghi theo id
        $brand = editbrand();
        break;
    case 'update':
        //Sửa dữ liệu trên db theo id
        updatebrand();
        break;
    case 'destroy':
//            Xóa dữ liệu trên db theo id
        destroybrand();
        break;
}
?>