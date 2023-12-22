<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>LMD SHOP</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="views/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="views/admin/css/ready.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.php?controller=admin" class="logo">
					ADMIN SHOP
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="views/admin/img/cdcd.jpg" alt="user-img" width="40" class="img-circle"><span >Nguyễn Văn Đô</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="views/admin/img/cdcd.jpg" alt="user"></div>
										<div class="u-text">
											<h4>Nguyễn Văn Đô</h4>
											<p class="text-muted">do@gmail.com</p>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="index.php?controller=login&action=logout"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="views/admin/img/cdcd.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Nguyễn Văn Đô
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
                    <ul class="nav">
						<li class="nav-item">
							<a href="index.php?controller=admin">
								<i class="la la-dashboard"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=users">
								<i class="la la-table"></i>
								<p>Manage member</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=category">
								<i class="la la-keyboard-o"></i>
								<p>Manage categories</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=brand">
								<i class="la la-keyboard-o"></i>
								<p>Manage Brand</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=payment">
								<i class="la la-keyboard-o"></i>
								<p>Manage Payment</p>
							</a>
						</li>
						<li class="nav-item active">
							<a href="index.php?controller=product">
								<i class="la la-th"></i>
								<p>Product Management</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="index.php?controller=order">
								<i class="la la-keyboard-o"></i>
								<p>Manage Order</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
            <div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h3 class="page-title">More products</h3>
                        <div class="row">
                            <div class="col-md-4">
                                    <form role="form" action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Product's name</label>
                                        <input  name="product_name" class="form-control" placeholder="">
                                    </div>                          
                                    <div class="form-group">
                                        <label>Product price</label>
                                        <input  name="product_price" type="number" min="0" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>ROM</label>
                                        <input  name="product_rom" type="text" class="form-control">
                                    </div>  
									<div class="form-group">
                                        <label>RAM</label>
                                        <input  name="product_ram" type="text" class="form-control">
                                    </div> 
									<div class="form-group">
                                        <label>CHIP</label>
                                        <input  name="product_chip" type="text" class="form-control">
                                    </div> 
									<div class="form-group">
                                        <label>Card VAG</label>
                                        <input  name="product_vga" type="text" class="form-control">
                                    </div>                  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Image product</label>
                                        <br>
                                        <input  name="product_img" type="file" onchange="preview()">
                                        <br>
                                        <br>
                                        <img src="img/ip14pro.png" class="rounded mx-auto d-block" alt="" id="productImage"width="280" height="350">
                                    </div>
                                </div>
								<?php
					
								?>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control">
											<?php
                                                foreach ($list[1] as $categor) {
											?>
                                            <option value= <?= $categor['category_id'] ?>><?= $categor['category_name'] ?></option>
											<?php
											}
											?>
                                        </select>
                                    </div>
									<div class="form-group">
                                        <label>Brand</label>
                                        <select name="brand_id" class="form-control">
											<?php
                                                foreach ($list[0] as $bran) {
											?>
                                            <option value= <?= $bran['brand_id'] ?>><?= $bran['brand_name'] ?></option>
											<?php
											}
											?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="product_status" class="form-control">
                                            <option value=1 selected>Stocking</option>
                                            <option value=0>Out of stock</option>
                                        </select>
                                    </div>
									<div class="form-group">
                                        <label>Featured products</label>
                                        <select name="product_feature" class="form-control">
                                            <option value=1 selected>Highlights</option>
                                            <option value=0>Not outstanding</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea  name="product_details" class="form-control" rows="4"></textarea>
                                        </div>
                                    <button name="sbm" type="submit" class="btn btn-info" value="Add new">Add new</button>
                                    <button type="reset" class="btn btn-warning">Refresh</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		function preview() {
    		productImage.src=URL.createObjectURL(event.target.files[0]);
		}
	</script>
</body>
<script src="js/core/jquery.3.2.1.min.js"></script>
<script src="js/core/bootstrap.min.js"></script>
</html>