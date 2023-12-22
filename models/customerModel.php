<?php
function index_H(){
    include_once 'connect/open.php';
    $sql = "SELECT * FROM product WHERE product_feature = 1 ORDER BY product_id DESC LIMIT 8";
    $productFeature = mysqli_query($connect, $sql);

    $sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT 3";
    $product = mysqli_query($connect, $sql);

    $sql = "SELECT * FROM category  ORDER BY category_id ASC ";
    $category = mysqli_query($connect, $sql);

    $list = array($category, $product, $productFeature);
    include_once 'connect/close.php';
    return $list;
}
function indexC(){
    $category_id = "1";
    $category_id = $_GET['id'];
    include_once 'connect/open.php';
    $sql = "SELECT * FROM product WHERE category_id = '$category_id' ORDER BY product_id DESC LIMIT 8";
    $product = mysqli_query($connect, $sql);

    $sql = "SELECT * FROM category  ORDER BY category_id ASC ";
    $category = mysqli_query($connect, $sql);
   
    // $productFeature = mysqli_query($connect, "SELECT * FROM product WHERE category_id = 1 AND product_feature = 1 ORDER BY product_id ASC LIMIT 4");

    // $limit = 2;
	// $queryCount = mysqli_query($connect, "SELECT count(product_id) as total FROM product");
	// $result = mysqli_fetch_array($queryCount);
	// $total_records = $result['total'];
	// $total_pages = ceil($total_records/ $limit);

	// if(isset($_GET['current_page'])) {
	// 	$current_page = $_GET['current_page'];
	// }else{
	// 	$current_page = 1;
	// }
	// if($current_page < 1) {
	// 	$current_page = 1;
	// }
	// if($current_page > $total_pages) {
	// 	$current_page = $total_pages;
	// }
	
	// $start = ($current_page - 1) * $limit;
   
    
    $list = array($category,$product);
    include_once 'connect/close.php';
    return $list;


}
function detailsC(){
    $id = $_GET['id'];
    include_once 'connect/open.php';
    $sql= "SELECT * FROM product WHERE product_id = '$id'" ;
    $productDetail = mysqli_query($connect, $sql);
    $sql = "SELECT * FROM category  ORDER BY category_id ASC ";
    $category = mysqli_query($connect, $sql);
    $list = array($category,$productDetail);
    include_once 'connect/close.php';
    return $list;
}
function add_to_cartC(){
    $id = $_GET['id'];
    if(isset($_SESSION['cart'])){
        if(isset($_SESSION['cart']['product_id'])){
            $_SESSION['cart'][$id] ++;
        }else{
            $_SESSION['cart'][$id] = 1;
        }
    }else{
        $_SESSION['cart'] = array();
        $_SESSION['cart'][$id] = 1;
    }

} 
function cart_viewC(){
    $cart = array();
    $temp = array();
    include_once 'connect/open.php';
    $sql = "SELECT * FROM category  ORDER BY category_id ASC ";
    $category = mysqli_query($connect, $sql);
    $sql = "SELECT * FROM payment";
    $payment = mysqli_query($connect, $sql);
    foreach($_SESSION['cart'] as $product_id => $amount) {
        $sqlNameAndPrice = "SELECT product_img, product_name, product_price FROM product WHERE product_id = '$product_id'";
        $nameAndPrice = mysqli_query($connect, $sqlNameAndPrice);
        foreach($nameAndPrice as $each){
            $temp[$product_id]['product_img'] = $each['product_img'];
            $temp[$product_id]['product_name'] = $each['product_name'];
            $temp[$product_id]['product_price'] = $each['product_price']*$amount;
            $temp[$product_id]['amount'] = $amount;
        }
    }
    include_once 'connect/close.php';
    $cart = $temp;
    $list = array($category, $cart, $payment);
    return  $list;

}
function delete_one_cart(){
    $product_id = $_GET['product_id'];
    unset($_SESSION['cart'][$product_id]);
}
function update_cart(){
    $items = $_POST['amount'];
    foreach($items as $product_id => $amount){
        $_SESSION['cart'][$product_id] = $amount;
    }
}
function delete_cart(){
    unset($_SESSION['cart']);
    $_SESSION['cart'] = array();
}
function add_order(){
    $payment_id = $_POST['payment_id'];
    $admin_id = $_SESSION['admin_id'];
    $dateBuy = date('Y-m-d');
    $status = 1;
    $user_id = $_SESSION['user_id'];
    include_once 'connect/open.php';
    $sqlAddOrder = "INSERT INTO orders(date_print, status, user_id, admin_id, payment_id ) VALUES ('$dateBuy', '$status', '$user_id', '$admin_id', '$payment_id')";
    mysqli_query($connect, $sqlAddOrder );
    $cart = $_SESSION['cart'];
    $sqlOrderID = "SELECT MAX(order_id) AS max_id FROM orders WHERE admin_id = '$admin_id'";
    $OrderID = mysqli_query($connect, $sqlOrderID);
    foreach($OrderID as $each){
        $OrderID = $each['max_id'];
        
    }
    foreach($cart as $product_id => $amount){
        $sqlPrice = "SELECT product_price FROM product WHERE product_id = '$product_id'";
        $Productprice= mysqli_query($connect, $sqlPrice );
        foreach($Productprice as $value){
            $product_price = $value['product_price'];
        }
        $sqlAddOrderDetail = "INSERT INTO order_detail VALUES ('$order_detail_id','$product_id', '$OrderID', '$product_price', '$amount')";
        mysqli_query($connect, $sqlAddOrderDetail);
    }
    include_once 'connect/close.php';
    unset($_SESSION['cart']);
    $_SESSION['cart'] = array();
}
function order_history(){
    $admin_id = $_SESSION['admin_id'];
    include_once 'connect/open.php';
    $sql = "SELECT * FROM category  ORDER BY category_id ASC ";
    $category = mysqli_query($connect, $sql);
    $sqlLK = "SELECT * FROM orders,admins WHERE orders.admin_id=admins.admin_id AND orders.admin_id='$admin_id' ORDER BY orders.order_id ASC";
    $queryLK = mysqli_query($connect, $sqlLK );
    include_once 'connect/close.php';
    $list = array($category, $queryLK);
    return $list;
}
function order_detail(){
    include_once 'connect/open.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM category  ORDER BY category_id ASC ";
    $category = mysqli_query($connect, $sql);
    $sqlLKD = "SELECT * FROM order_detail,product WHERE order_detail.product_id=product.product_id AND order_detail.order_id='".$id."' ORDER BY order_detail.order_detail_id ASC";
    $queryLKD = mysqli_query($connect, $sqlLKD );
    include_once 'connect/close.php';
    $list = array($category, $queryLKD);
    return $list;
}



//    Kiểm tra đang thực hiện hành động gì
switch ($action){
    case 'home':
        $list = index_H();
        break;
    case 'order_history':
        $list = order_history();
        break;
    case 'order_detail':
        $list = order_detail();
        break;
    case 'product':
        //Lấy dữ liệu từ db về
        $list = indexC();
        break;
    case 'detail':
        //Lấy dữ liệu từ db về
        $list = detailsC();
        break;
    case 'add_to_cart':
        add_to_cartC();
        break;
    case 'cart_view':
        if(isset($_SESSION['admin_email'])){
        $list = cart_viewC();
        } else {
            header('Location:index.php?controller=loginCus&action=loginCus');
        }
        break;
    case 'delete_one_cart':
        delete_one_cart();
        break;
    case 'update_cart':
        update_cart();
        break;
    case 'delete_cart':
        delete_cart();
        break;
    case 'add_order':
        add_order();
        break;
}

?>