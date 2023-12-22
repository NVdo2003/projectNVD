<?php
//function lấy dữ liệu từ db về
function index(){
    include_once 'connect/open.php';
    $search = '';
    if(isset($_POST['search'])){
        $search = $_POST['search'];
    }
    $page = 1;
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }
    $limit = 2;
    $sqlcountRecount = "SELECT COUNT(*) AS count_record FROM product  WHERE product.product_name LIKE '%$search%'";
    $countRecount = mysqli_query($connect, $sqlcountRecount);
    foreach ($countRecount as $each){
        $sqls = $each['count_record'];
    }
    $coutPage = ceil($sqls/$limit);
    $start = ($page - 1) * $limit;
    $sqlProduct = "SELECT * FROM product WHERE product.product_name LIKE '%$search%' LIMIT $start, $limit";
    $product = mysqli_query($connect, $sqlProduct);
    include_once 'connect/close.php';
    $array = array();
    $array['search'] = $search;
    $array['product'] = $product;
    $array['page'] = $coutPage;
    return $array;
}


//    function thêm dữ liệu lên db
function store(){
//        Lấy dữ liệu từ form về
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_rom = $_POST['product_rom'];
    $product_ram = $_POST['product_ram'];
    $product_chip = $_POST['product_chip'];
    $product_vga = $_POST['product_vga'];
    $product_status = $_POST['product_status'];
    $product_feature = $_POST['product_feature'];
    $product_details = $_POST['product_details'];
    $product_img = $_FILES['product_img']['name'];
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    include_once 'connect/open.php';
    $sql = "INSERT INTO product(product_name, product_price, product_rom, product_ram, product_chip, product_vga, product_status, product_feature, product_details, product_img, category_id, brand_id) VALUES ('$product_name', '$product_price', '$product_rom', '$product_ram', '$product_chip','$product_vga', '$product_status','$product_feature','$product_details','$product_img', '$category_id','$brand_id')";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    $nguon = $_FILES['product_img']['tmp_name'];
    $dich = "img/".$product_img;
    move_uploaded_file($nguon, $dich);		
}
//    function để lấy dữ liệu theo id
function edit(){
//        Lấy id
    $product_id = $_GET['product_id'];
    include_once 'connect/open.php';
    $sql = "SELECT * FROM product WHERE product_id = '$product_id'";
    $product = mysqli_query($connect, $sql);
    $sql = "SELECT * FROM brand";
    $brand = mysqli_query($connect, $sql);
    $sql = "SELECT * FROM category";
    $category = mysqli_query($connect, $sql);
    $list =array($brand,$category,$product);
    include_once 'connect/close.php';
    return $list;
}
//    function sửa dữ liệu trên db theo id
function update(){
//        Lấy dữ liệu cần update lên db
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_rom = $_POST['product_rom'];
    $product_ram = $_POST['product_ram'];
    $product_chip = $_POST['product_chip'];
    $product_vga = $_POST['product_vga'];
    $product_status = $_POST['product_status'];
    $product_feature = $_POST['product_feature'];
    $product_details = $_POST['product_details'];
    $product_img = $_FILES['product_img']['name'];
    $category_id = $_POST['category_id'];
    $brand_id = $_POST['brand_id'];
    include_once 'connect/open.php';
    $sql = "UPDATE product SET product_name = '$product_name', product_price = '$product_price', product_rom = '$product_rom', product_ram = '$product_ram', product_chip = '$product_chip', product_vga = '$product_vga', product_status = '$product_status', product_feature = '$product_feature', product_details = '$product_details', product_img = '$product_img', category_id = '$category_id', brand_id = '$brand_id'  WHERE product_id = '$product_id'";
    $product = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}
//    function xóa dữ liệu trên db theo id
function destroy(){
//        Lấy id
    $product_id = $_GET['product_id'];
    include_once 'connect/open.php';
    $sql = "DELETE FROM product WHERE product_id = '$product_id'";
    mysqli_query($connect, $sql);
    include_once 'connect/close.php';
}

function brand_category_index(){
    include_once 'connect/open.php';
    $sql = "SELECT * FROM brand";
    $brand = mysqli_query($connect, $sql);
    $sql = "SELECT * FROM category";
    $category = mysqli_query($connect, $sql);
    $list =array($brand,$category);
    include_once 'connect/close.php';
    return $list;
}





//    Kiểm tra đang thực hiện hành động gì
switch ($action){
    case '':
        //Lấy dữ liệu từ db về
        $array = index();
        break;
    case 'store':
        //Thêm dữ liệu lên DB
        store();
        break;
    case 'edit':
        //Lấy bản ghi theo id
        $list = edit();
        break;
    case 'update':
        //Sửa dữ liệu trên db theo id
        update();
        break;
    case 'destroy':
//            Xóa dữ liệu trên db theo id
        destroy();
        break;
    case'create':
        // do du lieu xuong
        $list = brand_category_index();
        break;
}
?>
