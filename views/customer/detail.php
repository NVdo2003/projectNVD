<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Product</title>
    <link rel="stylesheet" href="views/customer/css/bootstrap.css">
    <link rel="stylesheet" href="views/customer/css/home.css">
    <link rel="stylesheet" href="views/customer/css/product.css">
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
            <div class="container">
                <div class="row">
                    <div id="main" class="col-lg-12 col-md-12 col-sm-12">   
                        <div id="product">
                            <div id="product-head" class="row">
                                <?php
                                    foreach ($list[1] as $productDeta) {
                                ?>
                                <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
                                    <img src="views/customer/img/product/<?php echo $productDeta['product_img']; ?>" width="350">
                                </div>    
                                <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
                                    <br>
                                    <h1><?php echo $productDeta['product_name']; ?></h1>
                                    <ul>
                                        <li><span>RAM:</span> <?php echo $productDeta['product_ram']; ?></li>
                                        <li><span>ROM:</span> <?php echo $productDeta['product_rom']; ?></li>
                                        <li><span>CHIP:</span> <?php echo $productDeta['product_chip']; ?></li>
                                        <li><span>CARD VAG:</span> <?php echo $productDeta['product_vga']; ?></li>
                                        <br>
                                        <br>
                                        <li id="price-number"><span>Price:</span> <?php echo $productDeta['product_price']; ?> $</li>
                                        <li id="status">
                                            <?php
                                                if($productDeta['product_status'] == 1) {
                                                    echo "Stock";
                                                }else{
                                                    echo "Out of stocking";
                                                }
                                            ?>
                                        </li>
                                    </ul>
                                    <div id="add-cart"><a href="index.php?controller=customer&action=add_to_cart&id=<?php echo $productDeta['product_id']; ?>">Cart</a></div>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div id="product-body" class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h3>Detailed review of iPhone 14 Pro - 128GB</h3>
                                    <?php
                                        echo $productDeta['product_details'];
                                    ?>
                                </div>
                            </div>
                            <div id="comment" class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h3>Comment</h3>
                                    <form method="post">
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input name="comm_name" required type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input name="comm_mail" required type="email" class="form-control" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label>Content:</label>
                                            <textarea name="comm_details" required rows="3" class="form-control"></textarea>
                                        </div>
                                        <button type="submit" name="sbm" class="btn btn-primary">Send</button>
                                    </form>
                                </div>
                            </div>
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
</body>

</html>