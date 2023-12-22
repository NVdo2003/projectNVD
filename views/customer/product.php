
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>LAPTOP</title>
    <link rel="stylesheet" href="views/customer/css/bootstrap.css">
    <link rel="stylesheet" href="views/customer/css/home.css">
    <link rel="stylesheet" href="views/customer/css/category.css">
    <script src="views/customer/js/jquery-3.3.1.js"></script>
    <script src="views/customer/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/abc303ff4e.js" crossorigin="anonymous"></script>
</head>

<body>
    <a href="#"><img class="img-fluid" src="views/customer/img/banner/banana1.jpg" width="1350"></a>
        <div id="header">
            <div class="container"> 
                <div class="row">
                    <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                        <h1><a href="#"><img class="img-fluid" src="views/customer/img/web_logo.png" width="150" ></a></h1>
                    </div>
                    <div id="search" class="col-lg-5 col-md-5 col-sm-12">
                        <form class="form-inline">
                            <input class="form-control mt-3" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-danger mt-3" type="submit">Search</button>
                        </form>
                    </div>
                    <div id="cart" class="col-lg-2 col-md-2 col-sm-12">
                        <a class="mt-3 mr-1" href="#">
                            <i class="fa-solid fa-file-lines file-icon"></i> Introduct
                        </a>
                    </div>
                    <div id="cart" class="col-lg-1 col-md-1 col-sm-12">
                        <a class="mt-3 mr-1" href="#">
                            <i class="fa-sharp fa-solid fa-phone-volume call-icon"></i> Call
                        </a>
                    </div>
                    <div id="cart" class="col-lg-1 col-md-1 col-sm-12">
                        <a class="mt-3 mr-1" href="index.php?controller=customer&action=cart_view">
                            <i class="fa-solid fa-cart-shopping cart-icon">
                            <span class="mt-3"></span></i>
                        </a>
                        Cart
                    </div>
                </div>
            </div>
            <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>
            <div id="header-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <nav>
                                <div id="menu" class="collapse navbar-collapse">
                                    <ul>
                                        <li class="menu-item"><a href="index.php?controller=customer&action=home"><i class="fa-solid fa-house"></i>HOME</a></li>
                                        <?php 
                                            foreach($list[0] as $categor) {  
                                        ?>
                                            <li class="menu-item"><a href="#"></a></li>
                                            <li class="menu-item"><a href="index.php?controller=customer&action=product&id=<?php echo $categor['category_id']; ?>"><?php echo $categor['category_icon']; ?><?php echo $categor['category_name']?></a></li>
                                        <?php 
                                        } 
                                        ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div id="body">
                <div class="container-fluid">
                    <div class="row">
                        <div id="main" class="col-lg-12 col-md-12 col-sm-12">
                            <div id="slide" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#slide" data-slide-to="0" class="active"></li>
                                <li data-target="#slide" data-slide-to="1"></li>
                                <li data-target="#slide" data-slide-to="2"></li>
                                <li data-target="#slide" data-slide-to="3"></li>
                                <li data-target="#slide" data-slide-to="4"></li>
                                <li data-target="#slide" data-slide-to="5"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="views/customer/img/slide/slide-1.png" alt="Webleaners Training" width="1350" >
                                </div>
                                <div class="carousel-item">
                                <img src="views/customer/img/slide/slide-4.png" alt="Webleaners Training" width="1350">
                                </div>
                                <div class="carousel-item">
                                <img src="views/customer/img/slide/slide-3.png" alt="Webleaners Training" width="1350">
                                </div>
                                <div class="carousel-item">
                                <img src="views/customer/img/slide/slide-2.png" alt="Webleaners Training" width="1350">
                                </div>
                                <div class="carousel-item">
                                <img src="views/customer/img/slide/slide-5.png" alt="Webleaners Training" width="1350">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#slide" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#slide" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div id="main" class="col-lg-12 col-md-12 col-sm-12">   
                            <div class="products">
                                <h3>NEW PRODUCT</h3>
                                <div class="product-list row">
                                    <?php
                                        foreach ($list[1] as $produc) {
                                    ?>
                                    <div class="col-lg-4 col-md-12 col-sm-12 mx-product">
                                        <div class="product-item card text-center">
                                            <a href="index.php?controller=customer&action=detail&id=<?php echo $produc['product_id']; ?>"><img src="views/customer/img/product/<?php echo $produc['product_img']; ?>"></a>
                                            <h4><a href="index.php?controller=customer&action=detail&id=<?php echo $produc['product_id']; ?>"><?php echo $produc['product_name']; ?></a></h4>
                                            <p>Price: <span><?php echo $produc['product_price']; ?>$</span></p>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div id="pagination">
                                <ul class="pagination">
                                    <?php
                                        // if($current_page > 1 && $total_pages > 1) {
                                        //     $prev = $current_page - 1;
                                        //     echo '<li class="page-item"><a class="page-link" href="product.php?category_id='.$category_id.'& current_page='.$prev.'">&laquo;</a></li>';
                                        // }else{
                                        //     echo '<li class="page-item disabled"><a class="page-link disabled">&laquo;</a></li>';
                                        // }
                                    ?>
                                    <?php
                                        // for($i = 1; $i <= $total_pages; $i++) {
                                        //     if($i == $current_page) {
                                        //         echo '<li class="page-item active"><a class="page-link disabled" >'.$i.'</a></li>';
                                        //     }else{
                                        //         echo '<li class="page-item"><a class="page-link" href="product.php?category_id='.$category_id.'& current_page='.$i.'" >'.$i.'</a></li>';
                                        //     }
                                        // }

                                    ?>
                                    <?php
                                        // if($current_page < $total_pages && $total_pages > 1) {
                                        //     $next = $current_page + 1;
                                        //     echo '<li class="page-item"><a class="page-link" href="product.php?category_id='.$category_id.'& current_page='.$next.'">&raquo;</a></li>';
                                        // }else{
                                        //     echo '<li class="page-item disabled"><a class="page-link disabled">&raquo;</a></li>';
                                        // }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-top">
            <div class="container">
                <div class="row">
                    <div id="logo-2" class="col-lg-4 col-md-6 col-sm-12">
                        <h2><a href="#"><img src="views/customer/img/web logo.png" width="150"></a></h2>
                        <p>
                            <strong>LMD SHOP technology world</strong> <br> one of the most prestigious and quality stores in <br> the world, recognized as the world of technology, <br> ensuring the quality of buying and selling products <br> for users. 
                        </p>
                    </div>
                    <div id="address" class="col-lg-2 col-md-6 col-sm-12">
                        <h4>Joint Group Website</h4>
                        <p><a href="#"><img src="views/customer/img/fpt-shop.png" width="75"></a><a href="#"><img src="views/customer/img/thegioididong.jpg" width="75"></a></p>
                        <p><a href="#"><img src="views/customer/img/amazon.jpg" width="50"></a> <a href="#"><img src="views/customer/img/sendo.png" width="80"></a></p>
                    </div>
                    <div id="service" class="col-lg-3 col-md-6 col-sm-12">
                        <h4>Store Address:</h4>
                        <p>45 Rockefeller Plaza, New York, NewYork, Hoa Kỳ</p>
                        <p>400 5th Ave, New York, NewYork, Hoa Kỳ</p>
                        <p>Tân Vinh, Thăng Long, Thủ Đô Nông Cống</p>
                    </div>
                    <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
                        <h4>Hotline:</h4>
                        <p>Phone: (+84)982724756</p>
                        <p>Phone: (+84)986598336</p>
                        <p>Phone: (+84)337023966</p>
                        <p>Email: Dolfakerskt123@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p>
                            2022 © LMD Group. Store Address: Tân Vinh, Thăng Long, Nông Cống, Thanh Hóa. Assignment given by teacher Nguyễn Văn Huy on 11/22/2022. Responsible for the content Nguyễn Văn Đô
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>