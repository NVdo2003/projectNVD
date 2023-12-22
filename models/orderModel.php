<?php
//function lấy dữ liệu từ db về
function indexOrder(){
    include_once 'connect/open.php';
    $sql = "SELECT * FROM orders INNER JOIN admins ON orders.admin_id = admins.admin_id INNER JOIN user ON orders.user_id = user.user_id INNER JOIN payment ON orders.payment_id = payment.payment_id";
    $orders = mysqli_query($connect, $sql);
    include_once 'connect/close.php';
    return $orders;
}
function admin_history(){
    $admin_id = $_SESSION['admin_id'];
    include_once 'connect/open.php';
    $sqlLKc = "SELECT * FROM orders,admins WHERE orders.admin_id=admins.admin_id AND orders.admin_id='$admin_id' ORDER BY orders.order_id ASC";
    $queryLKc = mysqli_query($connect, $sqlLKc );
    include_once 'connect/close.php';
    return $queryLKc;
}
function admin_detail(){
    include_once 'connect/open.php';
    $id = $_GET['id'];
    $sqlLKDc = "SELECT * FROM order_detail,product WHERE order_detail.product_id=product.product_id AND order_detail.order_id='".$id."' ORDER BY order_detail.order_detail_id ASC";
    $queryLKDc = mysqli_query($connect, $sqlLKDc );
    include_once 'connect/close.php';
    return $queryLKDc;
}
function ship(){
    $order_id = $_GET['id'];
    include_once 'connect/open.php';
    $sql = "UPDATE orders SET status = '2' WHERE order_id = '$order_id' AND status IN ('1')";
    $orders = mysqli_query($connect, $sql);
    if ($orders){
        header('Location: index.php?controller=order');
        exit();
    }
    include_once 'connect/close.php';
}

function store(){
    //        Lấy dữ liệu từ form về
        $date_print = $_POST['date_print'];
        $status = $_POST['status'];
        $user_id = $_POST['user_id'];
        $admin_id = $_POST['admin_id'];
        $payment_id = $_POST['payment_id'];
        include_once 'connect/open.php';
        $sql = "INSERT INTO orders (date_print, status, quantity, user_id, admin_id, payment_id ) VALUES ('$date_print', '$status', '$quantity', '$user_id', '$admin_id', '$payment_id' )";
        mysqli_query($connect, $sql);
        include_once 'connect/close.php';
}
function destroy(){
    //        Lấy id
        $order_id = $_GET['order_id'];
        include_once 'connect/open.php';
        $sql = "DELETE FROM orders WHERE order_id = '$order_id'";
        mysqli_query($connect, $sql);
        include_once 'connect/close.php';
    }
switch ($action){
    case '':
        //Lấy dữ liệu từ db về
        $orders = indexOrder();
        break;
    case 'admin_history':
        $queryLKc = admin_history();
        break;
    case 'admin_detail':
        $queryLKDc = admin_detail();
        break;
        case 'destroy':
    //Xóa dữ liệu trên db theo id
        destroy();
        break;
    case 'ship':
        ship();
        break;

    }
?>