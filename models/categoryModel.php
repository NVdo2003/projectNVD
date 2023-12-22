<?php
//function lấy dữ liệu từ db về
function index(){
    include_once 'connect/open.php';
    $sql = "SELECT * FROM category";
    $category = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $category;
}
//    function thêm dữ liệu lên db
function store(){
//        Lấy dữ liệu từ form về
    $category_name = $_POST['category_name'];
    include_once 'connect/open.php';
    $sql = "INSERT INTO category (category_name) VALUES ('$category_name')";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function để lấy dữ liệu theo id
function edit(){
//        Lấy id
    $category_id = $_GET['category_id'];
    include_once 'connect/open.php';
    $sql = "SELECT * FROM category WHERE category_id = '$category_id'";
    $category = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $category;
}
//    function sửa dữ liệu trên db theo id
function update(){
//        Lấy dữ liệu cần update lên db
    $category_id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    include_once 'connect/open.php';
    $sql = "UPDATE category SET category_name = '$category_name' WHERE category_id = '$category_id'";
    $class = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function xóa dữ liệu trên db theo id
function destroy(){
//        Lấy id
    $category_id = $_GET['category_id'];
    include_once 'connect/open.php';
    $sql = "DELETE FROM category WHERE category_id = '$category_id'";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}

//    Kiểm tra đang thực hiện hành động gì
switch ($action){
    case '':
        //Lấy dữ liệu từ db về
        $category = index();
        break;
    case 'store':
        //Thêm dữ liệu lên DB
        store();
        break;
    case 'edit':
        //Lấy bản ghi theo id
        $category = edit();
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